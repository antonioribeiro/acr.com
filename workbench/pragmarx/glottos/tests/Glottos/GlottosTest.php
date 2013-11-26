<?php

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

use Mockery as m;

use PragmaRX\Glottos\Glottos;
use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Repositories\Data\DataRepository;
use PragmaRX\Glottos\Repositories\Messages\Laravel\Message;
use PragmaRX\Glottos\Repositories\Cache\Cache;
use Illuminate\Filesystem\Filesystem;

class GlottosTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->paragraph = "-->Hello, welcome to |-application name-|'s test cases!<--";

		$this->translatedParagraph = '-->Olá, seja bem-vindo aos casos de testes do Glottos!<--';

		$this->translationIntermediaryParagraph = 'Olá, seja bem-vindo aos casos de testes do |-application name-|';

		$this->replacableVariables = array('application name' => 'Glottos', 'variable' => 'name');

		$this->module = 0;

		$this->language = 'en';

		$this->country = 'us';

		$this->glottos = new Glottos(
			$this->config = new Config(new Filesystem),
			$this->locale = new Locale($this->language, $this->country),
			$this->sentenceBag = new SentenceBag($this->config, $this->paragraph),
			$this->dataRepository = m::mock('PragmaRX\Glottos\Repositories\Data\DataRepository'),
			$this->cache = new Cache(),
			$this->mode = new Mode()
		);

		$this->sentenceObject = new Sentence($this->paragraph, 0, new Mode);

		$this->translationSentenceObject = new Sentence($this->paragraph, 0, new Mode);
		$this->translationSentenceObject->setTranslation($this->translatedParagraph);

		$this->translationIntermediaryObject = new Sentence($this->paragraph, 0, new Mode);
		$this->translationIntermediaryObject->setTranslation($this->translationIntermediaryParagraph);
	}

	/**
	 * Close mockery.
	 *
	 * @return void
	 */
	public function tearDown()
	{
		m::close();
	}

	public function testGetSetModule()
	{
		$this->glottos->setModule(123);

		$this->assertEquals(123, $this->glottos->getModule());
	}

	public function testGetSetLocale()
	{
		$l = new Locale;

		$this->glottos->setLocale($l);

		$this->assertEquals($l, $this->glottos->getLocale());
	}

	public function testGetSetLanguageCountry()
	{
		$l = new Locale('zz','ww');

		$this->glottos->setLanguage('zz');
		$this->glottos->setCountry('ww');

		$this->assertEquals($l, $this->glottos->getLocale());
	}

	public function testTranslation()
	{
		$this->glottos->addVariable('application name', 'Glottos');

		$this->glottos->addVariable('variable', 'name');

		$this->dataRepository->shouldReceive('findTranslation')->once()->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->translate($this->paragraph);

		$this->dataRepository->shouldReceive('findTranslation')->once()->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->translate($this->paragraph, 'pt-br');

		$this->assertEquals($this->translatedParagraph, $t);
	}

	public function testAddTranslation()
	{
		$this->dataRepository->shouldReceive('findTranslation')->once()->andReturn($this->translationIntermediaryObject);
		$this->dataRepository->shouldReceive('addTranslation')->once()->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->addTranslation($this->paragraph, $this->translationIntermediaryParagraph, $this->locale);

		$this->assertEquals($t, $this->translationIntermediaryObject);

		$this->dataRepository->shouldReceive('findTranslation')->once()->andReturn($this->translationIntermediaryObject);
		$this->dataRepository->shouldReceive('addTranslation')->once()->andReturn($this->translationIntermediaryObject);

		$t = $this->glottos->addTranslation($this->paragraph, $this->translationIntermediaryParagraph, $this->language.'-'.$this->country, $this->module, $this->mode);

		$this->assertEquals($t, $this->translationIntermediaryObject);
	}

	public function testLocale()
	{
		$this->assertEquals($this->language.'-'.$this->country, $this->glottos->getTextLocale());

		$this->assertEquals($this->locale, $this->glottos->getLocale());
	}

	public function testLocaleIsAvailable()
	{
		$this->dataRepository->shouldReceive('localeIsAvailable')->once()->andReturn(true);

		$this->assertTrue($this->glottos->localeIsAvailable('en-us'));

		$this->dataRepository->shouldReceive('localeIsAvailable')->once()->andReturn(false);

		$this->assertFalse($this->glottos->localeIsAvailable('zz-zz'));
	}

	public function testZgetAllLanguages()
	{
		return $this->dataRepository->getAllLanguages();
	}

	public function testZgetEnabledLanguages()
	{
		return $this->dataRepository->getEnabledLanguages();
	}

	public function testZgetDisabledLanguages()
	{
		return $this->dataRepository->getDisabledLanguages();
	}

	public function testZenableDisableLanguage($id, $enable)
	{
		return $this->dataRepository->enableDisableLanguage($id, $enable);
	}

	public function testZgetLanguageStats()
	{
		return $this->dataRepository->getLanguageStats();
	}

	public function testZgetTranslations($locale = null)
	{
		return $this->dataRepository->getTranslations(Locale::make($locale));
	}

	public function findLocale($locale)
	{
		return $this->dataRepository->findLocale(Locale::make($locale));
	}	

	private function findTranslationById($message_id, Locale $locale)
	{
		return $this->dataRepository->findTranslationById($message_id, $locale);
	}	

	public function updateOrCreateTranslation($message, $translatedMessage, $locale)
	{
		$this->dataRepository->updateOrCreateTranslation($message, $translatedMessage, $locale);
	}	

	clean text before add translation

	public function getSetPrimaryLocale()
	{
		return $this->findLocale('en-us');
	}

	public function getSetSecondaryLocale()
	{
		return $this->findLocale('pt-br');
	}	
}