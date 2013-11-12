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

use PragmaRX\Construe\Support\SentenceBag;
use PragmaRX\Construe\Support\Config;
use Illuminate\Filesystem\Filesystem;

class SentenceTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->paragraph = '<#This is a string [with some delimiters inside the string] for testing purposes||. ||This is a second one#>';

		$this->sentence = new SentenceBag(new Config(new Filesystem), $this->paragraph);
	}

	public function testParseSentences()
	{
		$this->assertTrue($this->sentence->any());

		$this->assertFalse($this->sentence->isEmpty());

		$this->assertEquals($this->sentence->count(), 2);
	}

	public function testMainPrefixesAndSuffixes()
	{
		$this->assertEquals($this->sentence->getPrefix(), '<#');

		$this->assertEquals($this->sentence->getSuffix(), '#>');
	}

	public function testSentencePrefixesAndSuffixes()
	{
		$this->assertEquals($this->sentence->get(0)->suffix, '||');

		$this->assertEquals($this->sentence->get(1)->prefix, ' ||');
	}

	public function testPutSentence()
	{
		$sentence = 'new sentence';

		$this->sentence->put(0, $sentence);

		$this->assertEquals($this->sentence->get(0)->sentence, $sentence);
	}

	public function testgetSentenceBag()
	{
		$this->assertInstanceOf('PragmaRX\Construe\Support\SentenceBag', $this->sentence->getSentenceBag());
	}

	public function testGetSetDelimiter()
	{
		$this->sentence->setDelimiter('|');

		$this->assertEquals($this->sentence->getDelimiter(), '|');
	}

	public function testGetParagraph()
	{
		$this->assertEquals($this->sentence->getParagraph(), $this->paragraph);
	}

}