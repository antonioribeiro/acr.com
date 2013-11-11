<?php

use Mockery as m;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

}

class UserTest extends PHPUnit_Framework_TestCase{

	public function setUp()
	{
		$this->model = new User;
	}

	public function tearDown()
	{
		m::close();
	}

	public function testCreated()
	{
		$this->assertInstanceOf('Illuminate\Database\Eloquent\Model', $this->model);
	}	

	public function testSave()
	{
		$this->model->save();
	}	
}
