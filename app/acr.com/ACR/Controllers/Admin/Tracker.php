<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\Base;
use View;
use Input;
use Tracker as T;

class Tracker extends Base {

	public function index()
	{
		return View::make('admin.tracker.index')
				 ->with('sessions', T::openSessions());
	}
	
}