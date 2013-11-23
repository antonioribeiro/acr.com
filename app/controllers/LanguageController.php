<?php

class LanguageController extends BaseController {

	public function select($lang)
	{
		Session::put('glottos.lang', $lang);

		return Redirect::back();
	}

}

