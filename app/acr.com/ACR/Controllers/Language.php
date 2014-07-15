<?php namespace ACR\Controllers;

use \Session;
use \Redirect;

class Language extends Base {

	public function select($lang)
	{
		Session::put('glottos.lang', $lang);

		return Request::header('referer')
				? Redirect::back()
				: Redirect::to('/');
	}

}
