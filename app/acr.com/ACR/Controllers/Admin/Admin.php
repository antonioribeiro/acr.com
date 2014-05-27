<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\Base;
use \Redirect;

class Admin extends Base {

	public function index()
	{
		return Redirect::route('admin.languages.index');
	}

}