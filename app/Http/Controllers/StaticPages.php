<?php namespace App\Http\Controllers;

use App\Data\Models\Page;
use App\Services\Markdown;
use Controller;
use Illuminate\Support\Facades\App;
use View;
use Event;
use Glottos;

class StaticPages extends Base {

	public function show($page)
	{
		$page = Page::where('name', $page)->first();

		if ( ! $page)
		{
			App::Abort(404);
		}

		$lang = strtolower(Glottos::getLocaleAsText());

		return View::make('technology.pages.static')
				->with('pages', Page::getForRendering())
				->with('title', Markdown::transform($page->{'title_'.$lang}))
				->with('page', Markdown::transform($page->{'text_'.$lang}));
	}

}
