<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\Base;
use View;
use Input;
use Tracker as TrackerInstance;

class Tracker extends Base {

	public function index()
	{
		return View::make('admin.tracker.index')
				 ->with('sessions', TrackerInstance::lastSessions(60 * Input::get('hours') ?: 24));
	}
	
	public function log($uuid)
	{
		return View::make('admin.tracker.log')
				 ->with('log', TrackerInstance::sessionLog($uuid));
	}


	public function summary()
	{
		return View::make('admin.tracker.summary');
	}

	public function apiPageviews()
	{
		return TrackerInstance::pageViews()->toJson();
	}

}
