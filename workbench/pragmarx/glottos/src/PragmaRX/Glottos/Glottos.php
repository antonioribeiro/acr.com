<?php namespace PragmaRX\Glottos;
/**
 * Part of the Glottos package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Glottos
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\FileSystem;

use PragmaRX\Glottos\Repositories\DataRepository;
use PragmaRX\Glottos\Repositories\Cache\Cache;

class Glottos
{
	private $config;

	private $module = 0;

	private $locale;

	private $paragraph;

	private $dataRepository;

	private $variables = array();

	private $primaryLocale;

	private $secondaryLocale;

	/**
	 * Initialize Glottos object
	 * 
	 * @param Locale $locale
	 */
	public function __construct(
									Config $config, 
									Locale $locale, 
									SentenceBag $paragraph, 
									DataRepository $dataRepository,
									Cache $cache,
									Mode $mode,
									FileSystem $fileSystem
								)
	{
		$this->locale = $locale;

		$this->config = $config;

		$this->paragraph = $paragraph;

		$this->dataRepository = $dataRepository;

		$this->cache = $cache;

		$this->mode = $mode;

		$this->fileSystem = $fileSystem;
	}

	/**
	 * Module setter
	 * 
	 * @param integer $module
	 */
	public function setModule($module)
	{
		$this->module = $module;
	}

	/**
	 * Module getter
	 * 
	 * @return integer
	 */
	public function getModule()
	{
		return $this->module;
	}


	public function setMode($mode)
	{
		$this->mode = $mode;
	}

	public function getMode()
	{
		return $this->mode;
	}


	/**
	 * Locale setter
	 * 
	 * @param Locale $locale
	 */
	public function setLocale($locale)
	{
		$this->locale = new Locale($locale);
	}

	/**
	 * Locale setter
	 * 
	 * @param Locale $locale
	 */
	public function setLanguage($language)
	{
		$this->locale->setLanguage($language);
	}

	/**
	 * Locale country setter
	 * 
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->locale->setCountry($country);
	}

	/**
	 * Locale country setter
	 * 
	 * @param string $country
	 */
	public function addVariable($key, $value)
	{
		$this->variables[$key] = $value;
	}

	/**
	 * Locale getter
	 * 
	 * @return Locale
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * Locale getter
	 * 
	 * @return Locale
	 */
	public function getLocaleAsText($language = null, $country = null)
	{
		if ( ! is_null($language))
		{
			return with(new Locale($language, $country))->getText();
		}

		return $this->locale->getText();
	}

	/**
	 * Translate a group of paragraph
	 * 
	 * @param  string  $paragraph
	 * @param  Locale  $locale
	 * @param  integer $module
	 * @param  array  $variables
	 * @return string
	 */
	public function translate($paragraph, $locale = null, $module = 0)
	{
		return $this->replaceVariables(
										$this->translateParagraph($paragraph, $this->makeLocale($locale), $module ?: $this->module), 
										$this->variables
									);
	}

	private function makeLocale($locale = null)
	{
		if ($locale == null)
		{
			return $this->locale;
		}
		else
		if (is_string($locale))
		{
			return new Locale($locale);
		}

		return $locale;
	}

	/**
	 * Iterate tru the paragraph and translate one by one
	 * 
	 * @param  string $paragraph
	 * @param  Locale $locale
	 * @param  integer $module
	 * @return string
	 */
	private function translateParagraph($paragraph, Locale $locale, $module)
	{
		$this->paragraph->parseParagraph($paragraph, $module);

		foreach($this->paragraph->all() as $sentence)
		{
			$sentence->setTranslation($this->findTranslation($sentence, $locale, $module)->getTranslation());
		}

		return $this->paragraph->getTranslatedParagraph();
	}

	public function findTranslation(Sentence $translation, $locale)
	{
		return $this->dataRepository->findTranslation($translation, Locale::make($locale));
	}

	public function findTranslationById($message_id, $locale)
	{
		return $this->dataRepository->findTranslationById($message_id, Locale::make($locale));
	}

	public function findMessageById($message_id)
	{
		return $this->dataRepository->findMessageById($message_id);
	}

	/**
	 * Replace all user variables by its respective values
	 * 
	 * @param  string $translation
	 * @param  array $variables
	 * @return string
	 */
	private function replaceVariables($string, array $variables = array())
	{
		foreach($variables as $key => $variable) {
			$string = $this->replaceVariable($key, $variable, $string);
		}

		return $string;
	}

	/**
	 * Replace one user variables by its respective value
	 * 
	 * @param  string $key
	 * @param  string $variable
	 * @param  string $translation
	 * @return string
	 */
	private function replaceVariable($key, $variable, $translation)
	{
		return str_replace(
							$this->config->get('variable_delimiter_prefix') . "$key" . $this->config->get('variable_delimiter_suffix'), 
							$variable, 
							$translation
						);
	}

	public function addTranslation($message, $translatedMessage, $locale = null, $module = 0)
	{
		$module = $module ?: $this->module;

		$locale = Locale::make($locale, $this->locale);

		$translation = Sentence::makeTranslation($message, $translatedMessage, $module, $this->mode);

		$translation = $this->findTranslation($translation, $locale);

		if(! $translation->translationFound)
		{
			return $this->dataRepository->addTranslation($translation, $locale, $module);
		}

		return $translation;
	}

	public function getDefaultLocale()
	{
		return $this->dataRepository->getDefaultLocale();
	}

	public function localeIsAvailable($locale)
	{
		return $this->dataRepository->localeIsAvailable(Locale::make($locale));
	}

	public function getAllLanguages()
	{
		return $this->dataRepository->getAllLanguages();
	}

	public function getEnabledLanguages()
	{
		return $this->dataRepository->getEnabledLanguages();
	}

	public function getDisabledLanguages()
	{
		return $this->dataRepository->getDisabledLanguages();
	}

	public function enableDisableLanguage($id, $enable)
	{
		return $this->dataRepository->enableDisableLanguage($id, $enable);
	}

	public function getLanguageStats()
	{
		return $this->dataRepository->getLanguageStats();
	}

	public function getTranslations($localePrimary = null, $localeSecondary = null)
	{
		return $this->dataRepository->getTranslations(Locale::make($localePrimary), Locale::make($localeSecondary));
	}

	public function findLocale($locale)
	{
		return $this->dataRepository->findLocale(Locale::make($locale));
	}	

	public function updateOrCreateTranslation($message, $translatedMessage, $locale)
	{
		$this->dataRepository->updateOrCreateTranslation($message, $translatedMessage, Locale::make($locale), $module = 0, $this->mode);
	}	

	public function findNextUntranslated($localePrimary, $localeSecondary)
	{
		return $this->dataRepository->findNextUntranslated(Locale::make($localePrimary), Locale::make($localeSecondary));
	}	

	public function getPrimaryLocale()
	{
		if( ! $this->primaryLocale)
		{
			$this->primaryLocale = $this->getDefaultLocale();
		}

		return $this->primaryLocale;
	}

	public function getSecondaryLocale()
	{
		if( ! $this->secondaryLocale)
		{
			$this->secondaryLocale = $this->dataRepository->guessSecondaryLocale($this->getPrimaryLocale());
		}

		return $this->secondaryLocale;
	}

	public function setPrimaryLocale($locale)
	{
		return $this->primaryLocale = $locale;
	}

	public function setSecondaryLocale($locale)
	{
		return $this->secondaryLocale = $locale;
	}

	public function import($app, $path = null)
	{
		return $this->dataRepository->import($app, $path, $this->getModule(), $this->getMode());
	}

}
