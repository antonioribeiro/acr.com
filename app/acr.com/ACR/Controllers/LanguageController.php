<?php namespace ACR\Controllers;

use \Session;
use \Redirect;

class LanguageController extends BaseController {

	public function select($lang)
	{
		Session::put('glottos.lang', $lang);

		return Redirect::back();
	}

}