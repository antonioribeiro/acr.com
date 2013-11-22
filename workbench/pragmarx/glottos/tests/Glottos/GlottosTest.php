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

		$this->language = 'pt';

		$this->country = 'br';

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
}