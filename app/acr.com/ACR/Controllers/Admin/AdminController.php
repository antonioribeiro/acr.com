<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\BaseController;
use \Redirect;

class AdminController extends BaseController {

	public function index()
	{
		return Redirect::route('admin.languages.index');
	}

}