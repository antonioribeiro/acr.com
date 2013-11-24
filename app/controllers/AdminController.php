<?php

class AdminController extends BaseController {

	public function index()
	{
		$languages = Glottos::getAllLanguages();

		return View::make('admin.pages.index')->with('languages', $languages);
	}

	public function enableLanguage($id)
	{
		return $this->enableDisableLanguage($id, true);
	}

	public function disableLanguage($id)
	{
		return $this->enableDisableLanguage($id, false);
	}

	public function enableDisableLanguage($id, $enable)
	{
		Glottos::enableDisableLanguage($id, $enable);

		return Redirect::back();
	}

}