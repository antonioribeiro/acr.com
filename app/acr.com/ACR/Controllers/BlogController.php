<?php namespace ACR\Controllers;

use \View;
use ACR\Models\Article;

class BlogController extends BaseController {

	public function index()
	{
		return View::make('blog.pages.index')
				->with('articles', Article::all());
	}

}

