<?php

class AdminController extends BaseController {

	public function index()
	{
		return View::make('admin.pages.index');
	}

}