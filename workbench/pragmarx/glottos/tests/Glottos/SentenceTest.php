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

use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Mode;
 
class SentenceTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->message = 'This is a string sentence';

		$this->translation = 'This is a translated string sentence';

		$this->messageHash = '3235e90356d697c9d0ff7910ad99632fa2a8520e'; /// for 'This is a string sentence0'

		$this->config = m::mock('PragmaRX\Glottos\Support\Config');

		$this->messageNatural = 'natural::'.$this->message;

		$this->messageKey = 'key::'.$this->message;

		$this->module = 0;

		$this->messageWrongKey = 'key:::'.$this->message;

		$this->sentence = new Sentence($this->message, $this->module, new Mode('natural'));

		$this->translatedSentence = new Sentence($this->message, $this->module, new Mode('natural'));

		$this->translatedSentence->setTranslation($this->translation);
	}

	public function testModuleIsZero()
	{
		$this->assertTrue($this->sentence->getModule() === $this->module);
	}

	public function testGetSetModule()
	{
		$this->sentence->setModule(1);

		$this->assertEquals($this->sentence->getModule(), 1);
	}

	public function testGetSetSentence()
	{
		$this->sentence->setSentence('changed');

		$this->assertEquals($this->sentence->getSentence(), 'changed');
	}

	public function testHash()
	{
		$this->assertEquals($this->sentence->getHash(), $this->messageHash);
	}

	public function testHashDifferent()
	{
		$this->sentence->setModule(1);
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);
	}

	public function testRecalculateHash()
	{
		$this->sentence->setSentence('changed');
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);

		$this->sentence->setModule(1);
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);

		$this->sentence->setSentence($this->message);
		$this->assertNotEquals($this->sentence->getHash(), $this->messageHash);

		$this->sentence->setModule($this->module);
		$this->assertEquals($this->sentence->getHash(), $this->messageHash);
	}

	public function testCheckModes()
	{
		$this->assertEquals('natural', $this->sentence->getMode());

		$this->sentence->setSentence($this->messageNatural);
		$this->assertEquals($this->sentence->getSentence(), $this->message);
		$this->assertEquals('natural', $this->sentence->getMode());

		$this->sentence->setSentence($this->messageKey);
		$this->assertEquals($this->sentence->getSentence(), $this->message);
		$this->assertEquals('key', $this->sentence->getMode());

		$this->sentence->setSentence($this->messageWrongKey);
		$this->assertNotEquals($this->sentence->getSentence(), $this->message);
		$this->assertEquals('key', $this->sentence->getMode());

		$this->sentence = new Sentence('key::key_string', $this->module, new Mode('natural'));
		$this->assertEquals('key_string', $this->sentence->getSentence());
		$this->assertEquals('key', $this->sentence->getMode());
	}

	public function testMake()
	{
		$sentence = Sentence::make($this->message, $this->module, new Mode('natural'));

		$this->assertEquals($this->sentence, $sentence);

		$sentence = Sentence::make('wrong', $this->module, new Mode('natural'));

		$this->assertNotEquals($this->sentence, $sentence);
	}

	public function testMakeTranslation()
	{
		$translation = Sentence::makeTranslation($this->message, $this->translation, $this->module, new Mode('natural'));

		$this->assertEquals($this->translatedSentence, $translation);

		$translation = Sentence::makeTranslation($this->message, 'wrong', $this->module, new Mode('natural'));

		$this->assertNotEquals($this->translatedSentence, $translation);

	}

	public function testPrefixSuffix()
	{
		$this->sentence = new Sentence("#<$this->message>#", $this->module, new Mode('natural'));

		$this->assertEquals("#<$this->message>#", $this->sentence->getSentence());
	}

}
