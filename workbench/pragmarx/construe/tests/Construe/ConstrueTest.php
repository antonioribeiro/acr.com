<?php

/**
 * Part of the Construe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Construe
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

use PragmaRX\Construe\Construe;
use PragmaRX\Construe\Support\Sentence;
use PragmaRX\Construe\Support\Locale;
use PragmaRX\Construe\Support\SentenceBag;
use PragmaRX\Construe\Support\Config;
use PragmaRX\Construe\Messages\Laravel\Message;
use Illuminate\Filesystem\Filesystem;
use Mockery as m;

class ConstrueTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->paragraph = "Hello, welcome to |-application name-|'s test cases!";

		$this->translatedIntermediaryParagraph = 'Olá, seja bem-vindo aos casos de testes do |-application name-|';

		$this->translatedParagraph = 'Olá, seja bem-vindo aos casos de testes do Construe!';

		$this->replacableVariables = array('application name' => 'Construe');

		$this->module = 0;

		$this->construe = new Construe(
			$this->config = new Config(new Filesystem),
			$this->locale = new Locale('pt', 'br'),
			$this->sentenceBag = new SentenceBag($this->config, $this->paragraph),
			$this->message = m::mock('PragmaRX\Construe\Messages\Laravel\Message')
		);

		$this->sentenceObject = new Sentence('',$this->paragraph,'');

		$this->translatedSentenceObject = new Sentence('',$this->paragraph,'');
		$this->translatedSentenceObject->translated = $this->translatedParagraph;

		$this->translatedIntermediaryObject = new Sentence('',$this->paragraph,'');
		$this->translatedIntermediaryObject->translated = $this->translatedIntermediaryParagraph;
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
		$this->construe->setModule(123);

		$this->assertEquals(123, $this->construe->getModule());
	}

	public function testGetSetLocale()
	{
		$l = new Locale;

		$this->construe->setLocale($l);

		$this->assertEquals($l, $this->construe->getLocale());
	}

	public function testTranslation()
	{
		$this->message->shouldReceive('findMessage')->once()->andReturn($this->translatedIntermediaryObject);

		$t = $this->construe->translate($this->paragraph, $this->replacableVariables);

		$this->assertEquals($t, $this->translatedParagraph);
	}

}