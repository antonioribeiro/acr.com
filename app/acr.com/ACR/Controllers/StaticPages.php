<?php namespace ACR\Controllers;

use ACR\Models\Page;
use Controller;
use View;
use Event;
use Glottos;

class StaticPages extends Base {

	public function show($page)
	{
		$page = Page::where('name_en', ucwords($page))->first();

		$lang = strtolower(Glottos::getLocaleAsText());

		return View::make('technology.pages.static')->with('page', $page->{'text_'.$lang});
	}

}