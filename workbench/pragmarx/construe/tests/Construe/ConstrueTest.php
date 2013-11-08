<?php

use PragmaRX\Construe\Construe;
use Mockery as m;

class ConstrueLoaderTest extends PHPUnit_Framework_TestCase {

	public function tearDown()
	{
		m::close();
	}


	public function testConstrueInstantiatingTest()
	{
		$c = new Construe;
	}

}