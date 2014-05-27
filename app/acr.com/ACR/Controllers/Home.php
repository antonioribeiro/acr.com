<?php namespace ACR\Controllers;

use View;

class Home extends Base {

	public function index()
	{
		return View::make('home.index');
	}

}