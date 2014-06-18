<?php namespace ACR\Controllers;

use ACR\Models\Page;
use ACR\Services\Markdown;
use Controller;
use Illuminate\Support\Facades\App;
use View;
use Event;
use Glottos;

class StaticPages extends Base {

	public function show($page)
	{
		$page = Page::where('name_en', ucwords($page))->first();

		if ( ! $page)
		{
			App::Abort(404);
		}

		$lang = strtolower(Glottos::getLocaleAsText());

		return View::make('technology.pages.static')
				->with('page', Markdown::transform($page->{'text_'.$lang}));
	}

}
