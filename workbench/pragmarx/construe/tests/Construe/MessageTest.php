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
use PragmaRX\Construe\Support\Locale;
use PragmaRX\Construe\Support\SentenceBag;
use PragmaRX\Construe\Support\Config;
use Illuminate\Filesystem\Filesystem;


use PragmaRX\Construe\Messages\Laravel\Message;
use PragmaRX\Construe\Support\Sentence;
use Mockery as m;

class MessageTest extends Orchestra\Testbench\TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->paragraph = "Hello, welcome to |-application name-|'s test cases!";

		$this->messageId = 'e3e85fec2dc174602ccb8d081befe00cc46e52da';

		$this->sentence = new Sentence('',$this->paragraph,'');

		$this->locale = new Locale('pt', 'br');

		$this->module = 0;

		$this->message = new Message;
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

	public function testIntantiation()
	{
		return $this->message;
	}

	public function testMessageId()
	{
		// $messageId = $this->message->buildMessageId($this->sentence, $this->locale, $this->module);

		// $this->assertEquals($this->message, $messageId);
	}

	public function testFind()
	{	
		// $sentence = $this->message->find($this->sentence, $this->locale, $this->module);
	}

}