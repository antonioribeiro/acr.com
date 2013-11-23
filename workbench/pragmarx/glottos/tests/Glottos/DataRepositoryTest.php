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

use PragmaRX\Glottos\Repositories\Data\DataRepository;

use PragmaRX\Glottos\Repositories\Messages\Message;
use PragmaRX\Glottos\Repositories\Messages\Translation;

use PragmaRX\Glottos\Repositories\Locales\LocaleRepository;
use PragmaRX\Glottos\Repositories\Locales\Language;
use PragmaRX\Glottos\Repositories\Locales\Country;
use PragmaRX\Glottos\Repositories\Locales\CountryLanguage;

use PragmaRX\Glottos\Repositories\Cache\Cache;
use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\Config;

class DataRepositoryTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->message = 'header:title';
		$this->messageHash = '5fae05f562f6e9cd06b81c4eaee330ef29b3a55e'; // for 'header:title0'

		$this->translation = 'message translation';

		$this->record = new stdClass();          
		$this->record->id = 1;
		$this->record->message = $this->message;

		$this->translationRecord = new stdClass();          
		$this->translationRecord->id = 1;
		$this->translationRecord->message = $this->translation;

		$this->sentence = new Sentence($this->message, 0, new Mode);

		$this->translatedSentence = new Sentence($this->message, 0, new Mode);
		$this->translatedSentence->setTranslation($this->translationRecord->message);
		$this->translatedSentence->setId(1);

		$this->language = 'en';
		$this->country = 'us';
		$this->ptBr = 'pt-br';

		$this->locale = Locale::make($this->language.'-'.$this->country);

		$this->localePtBr = Locale::make($this->ptBr);

		$this->foundSentence = new Sentence($this->message, 0, new Mode);
		$this->foundSentence->setId(1);

		$this->modelMessageMock = m::mock('stdClass');
		$this->modelTranslationMock = m::mock('stdClass');

		$this->modelLanguageMock = m::mock('PragmaRX\Glottos\Repositories\Locales\Language');
		$this->modelCountryMock = m::mock('PragmaRX\Glottos\Repositories\Locales\Country');
		$this->modelLanguageCountryMock  = m::mock('PragmaRX\Glottos\Repositories\Locales\CountryLanguage');

		$this->modelLanguageCountryReturnMock = m::mock('stdClass');
		$this->modelLanguageCountryReturnMock->enabled = true;

		$this->config = m::mock('PragmaRX\Glottos\Support\Config');

		$this->cache = new Cache();

		$this->dataRepository = new DataRepository( 
													$this->messageRepository = new Message($this->modelMessageMock, $this->cache),
													$this->translationRepository = new Translation($this->modelTranslationMock, $this->cache),
													$this->translationRepository = new LocaleRepository($this->modelLanguageMock, $this->modelCountryMock, $this->modelLanguageCountryMock, $this->cache),
													$this->config
												);
	}

	public function testIdAndHash()
	{
		$this->assertEquals($this->sentence->getHash(), $this->messageHash);

		// Sentence ID here must still be null
		$this->assertNull($this->sentence->getId());
	}

	public function testFindSentence()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$sentence = $this->dataRepository->findSentence($this->sentence);

		$this->assertEquals($sentence->getId(), $this->foundSentence->getId());
		$this->assertEquals($sentence->getHash(), $this->foundSentence->getHash());
		$this->assertEquals($sentence->getModule(), $this->foundSentence->getModule());
	}

	public function testCreateSentence()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn(null);
		$this->modelMessageMock->shouldReceive('create')->once()->andReturn($this->record);

		$sentence = $this->dataRepository->findSentence($this->sentence);

		$this->assertEquals($sentence->getId(), $this->foundSentence->getId());
		$this->assertEquals($sentence->getHash(), $this->foundSentence->getHash());
		$this->assertEquals($sentence->getModule(), $this->foundSentence->getModule());
	}

	public function testTranslate()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);
		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn($this->translationRecord);

		$sentence = $this->dataRepository->findTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->getFullTranslation(), $this->translationRecord->message);

		$this->assertTrue($sentence->translationFound);
	}

	public function testTranslationNotFound()
	{
		$this->modelMessageMock->shouldReceive('where')->once()->andReturn($this->modelMessageMock);

		$this->modelMessageMock->shouldReceive('first')->once()->andReturn($this->record);

		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);

		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn(null);

		$sentence = $this->dataRepository->findTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->getFullTranslation(), $this->message);

		$this->assertFalse($sentence->translationFound);
	}

	public function testAddTranslationLocale()
	{
		$this->modelTranslationMock->shouldReceive('create')->once()->andReturn($this->translatedSentence);

		$addedSentence = $this->dataRepository->addTranslation($this->translatedSentence, $this->locale);

		$this->assertEquals($this->translatedSentence->getFullSentence(), $this->message);

		$this->assertEquals($this->translatedSentence->getFullTranslation(), $this->translation);

		$this->assertEquals(1, $this->translatedSentence->getId());

		$this->assertEquals($addedSentence, $this->translatedSentence);
	}

	public function testDefaultLocale()
	{
		$this->config->shouldReceive('get')->with('default_language_id')->andReturn($this->language);
		$this->config->shouldReceive('get')->with('default_country_id')->andReturn($this->country);

		$this->assertEquals($this->locale, $this->dataRepository->getDefaultLocale());
	}

	public function testLocaleIsAvailable()
	{
		$this->config->shouldReceive('get')->with('default_language_id')->andReturn($this->language);
		$this->config->shouldReceive('get')->with('default_country_id')->andReturn($this->country);

		$this->assertTrue($this->dataRepository->localeIsAvailable($this->locale));

		$this->modelLanguageCountryMock->shouldReceive('find')->andReturn($this->modelLanguageCountryReturnMock);

		$this->assertTrue($this->dataRepository->localeIsAvailable($this->localePtBr));

		$this->modelLanguageCountryReturnMock->enabled = false;
		$this->modelLanguageCountryMock->shouldReceive('find')->andReturn($this->modelLanguageCountryReturnMock);
		$this->assertFalse($this->dataRepository->localeIsAvailable('pt-pt'));
	}
}