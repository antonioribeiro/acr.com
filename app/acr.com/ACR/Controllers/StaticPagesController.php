<?php namespace ACR\Controllers;

use \Controller;
use \View;
use \Event;

class StaticPagesController extends BaseController {

	public function show($page)
	{
		return View::make('blog.pages.static')->with('page', $page);
	}

}