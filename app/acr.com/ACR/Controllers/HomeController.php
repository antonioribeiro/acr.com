<?php namespace ACR\Controllers;

use View;

class HomeController extends BaseController {

	public function index()
	{
		return \Glottos::getBrowserLanguage();

		return View::make('home.index');
	}

}