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

		$this->sentenceBag = new SentenceBag(new Config(new Filesystem));

		$this->sentenceBag->parseParagraph($this->paragraph);
	}

	public function testEmptySentences()
	{
		$this->sentenceBag->parseParagraph(null); /// remove the previously parsed paragraph

		$this->assertFalse($this->sentenceBag->any());

		$this->assertTrue($this->sentenceBag->isEmpty());

		$this->assertEquals($this->sentenceBag->count(), 0);
	}

	public function testParseSentences()
	{
		$this->assertTrue($this->sentenceBag->any());

		$this->assertFalse($this->sentenceBag->isEmpty());

		$this->assertEquals($this->sentenceBag->count(), 2);
	}

	public function testMainPrefixesAndSuffixes()
	{
		$this->assertEquals($this->sentenceBag->getPrefix(), '<#');

		$this->assertEquals($this->sentenceBag->getSuffix(), '#>');
	}

	public function testSentencePrefixesAndSuffixes()
	{
		$this->assertEquals($this->sentenceBag->get(0)->suffix, '||');

		$this->assertEquals($this->sentenceBag->get(1)->prefix, ' ||');
	}

	public function testPutSentence()
	{
		$sentence = 'new sentence';

		$this->sentenceBag->put(0, $sentence);

		$this->assertEquals($this->sentenceBag->get(0)->getSentence(), $sentence);
	}

	public function testgetSentenceBag()
	{
		$this->assertInstanceOf('PragmaRX\Construe\Support\SentenceBag', $this->sentenceBag->getSentenceBag());
	}

	public function testGetSetDelimiter()
	{
		$this->sentenceBag->setDelimiter('|');

		$this->assertEquals($this->sentenceBag->getDelimiter(), '|');
	}

	public function testGetParagraph()
	{
		$this->assertEquals($this->sentenceBag->getParagraph(), $this->paragraph);
	}

}