<?php namespace PragmaRX\Glottos\Repositories\Locales;
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

class LocaleRepository implements LocaleRepositoryInterface {

	private $language;

	private $country;

	private $countryLanguage;

	public function __construct(Language $language, Country $country, CountryLanguage $countryLanguage)
	{
		$this->language = $language;

		$this->country = $country;

		$this->countryLanguage = $countryLanguage;
	}

	public function find(Locale $locale)
	{
		 return $this->countryLanguage->find($locale);
	}

	public function localeIsAvailable(Locale $locale)
	{
		$countryLanguage = $this->find($locale);

		return is_null($countryLanguage) 
			   ? false 
			   : $countryLanguage->enabled;
	}

	public function getLanguages($column = null, $operand = null, $value = null)
	{
		return $this->countryLanguage->all($column, $operand, $value);
	}

	public function enableDisableLanguage($id, $enable)
	{
		return $this->countryLanguage->enableDisableLanguage($id, $enable);
	}

	public function getLanguageStats()
	{
		return $this->countryLanguage->getStats();
	}
}