<?php

class AdminController extends BaseController {

	public function index()
	{
		$languages = Glottos::getAllLanguages();

		foreach($languages as $language)
		{
			kk($language);	
		}
		

		return View::make('admin.pages.index');
	}

}