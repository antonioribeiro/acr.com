<?php namespace ACR\Controllers;

use \Session;
use \Redirect;

class LanguageController extends BaseController {

	public function select($lang)
	{
		k( $lang );
		
		k( Session::get('glottos.lang') );
	
		Session::put('glottos.lang', $lang);

		kk( Session::get('glottos.lang') );

		return Redirect::back();
	}

}