<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\Base;
use View;
use Input;
use Tracker as TrackerInstance;
use Session;

class Tracker extends Base {

	public function __construct()
	{
		// parent::__construct();

		Session::put('tracker.days', Input::get('days', 1));

		Session::put('tracker.page', Input::get('page', 'main'));
	}

	public function index()
	{
		return $this->showPage(Session::get('tracker.page'));
	}

	public function showPage($page)
	{
		switch ($page) {
			case 'summary':
			default:
				return $this->summary();
				break;

			case 'main':
			default:
				return $this->main();
				break;
		}
	}

	public function main()
	{
		return View::make('admin.tracker.index')
				 ->with('sessions', TrackerInstance::lastSessions(60 * 24 * Session::get('tracker.days')));
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
