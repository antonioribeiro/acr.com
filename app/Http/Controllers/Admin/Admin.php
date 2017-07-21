<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base;
use \Redirect;

class Admin extends Base {

	public function index()
	{
		return Redirect::route('admin.languages.index');
	}

}
