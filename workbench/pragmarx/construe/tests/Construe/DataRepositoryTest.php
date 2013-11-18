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

use Mockery as m;

use PragmaRX\Construe\Repositories\Data\DataRepository;
use PragmaRX\Construe\Repositories\Messages\Message;
use PragmaRX\Construe\Repositories\Messages\Translation;
use PragmaRX\Construe\Support\Sentence;
use PragmaRX\Construe\Support\Locale;

class DataRepositoryTest extends PHPUnit_Framework_TestCase {

	public function setup()
	{
		$this->record = new stdClass();          
		$this->record->id = 1;

		$this->translatedRecord = new stdClass();          
		$this->translatedRecord->id = 1;
		$this->translatedRecord->translated = 'message translated';

		$this->message = 'header:title'; // sha1 = 5fae05f562f6e9cd06b81c4eaee330ef29b3a55e

		$this->sentence = new Sentence('', $this->message, '');

		$this->locale = new Locale('pt', 'br');

		$this->foundSentence = new Sentence('', $this->message, '');
		$this->foundSentence->setId(1);

		$this->modelMessageMock = m::mock('stdClass');
		$this->modelTranslationMock = m::mock('stdClass');

		$this->dataRepository = new DataRepository( 
													$this->messageRepository = new Message($this->modelMessageMock),
													$this->translationRepository = new Translation($this->modelTranslationMock)
												);
	}

	public function testIdAndHash()
	{
		$this->assertEquals($this->sentence->getHash(), '5fae05f562f6e9cd06b81c4eaee330ef29b3a55e');

		// Sentence ID here must still be null
		$this->assertNull($this->sentence->getId());
	}

	public function testFindSentence()
	{
		$this->modelMessageMock->shouldReceive('find')->once()->andReturn($this->record);

		$sentence = $this->dataRepository->findSentence($this->sentence);

		$this->assertEquals($sentence->getId(), $this->foundSentence->getId());
		$this->assertEquals($sentence->getHash(), $this->foundSentence->getHash());
		$this->assertEquals($sentence->getModule(), $this->foundSentence->getModule());
	}

	public function testCreateSentence()
	{
		$this->modelMessageMock->shouldReceive('find')->once()->andReturn(null);
		$this->modelMessageMock->shouldReceive('create')->once()->andReturn($this->record);

		$sentence = $this->dataRepository->findSentence($this->sentence);

		$this->assertEquals($sentence->getId(), $this->foundSentence->getId());
		$this->assertEquals($sentence->getHash(), $this->foundSentence->getHash());
		$this->assertEquals($sentence->getModule(), $this->foundSentence->getModule());
	}

	public function testTranslate()
	{
		$this->modelMessageMock->shouldReceive('find')->once()->andReturn($this->record);
		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn($this->translatedRecord);

		$sentence = $this->dataRepository->findTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->translated, $this->translatedRecord->translated);
	}

	public function testTranslationNotFound()
	{
		$this->modelMessageMock->shouldReceive('find')->once()->andReturn($this->record);
		$this->modelTranslationMock->shouldReceive('where')->times(3)->andReturn($this->modelTranslationMock);
		$this->modelTranslationMock->shouldReceive('first')->once()->andReturn(null);

		$sentence = $this->dataRepository->findTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->translated, $this->message);
	}

	public function testAddTranslation()
	{
		$this->modelMessageMock->shouldReceive('find')->once()->andReturn($this->record);

		$this->modelTranslationMock->shouldReceive('create')->once()->andReturn($this->translatedRecord);

		$sentence = $this->dataRepository->addTranslation($this->sentence, $this->locale);

		$this->assertEquals($sentence->translated, $this->translatedRecord->translated);
	}

}