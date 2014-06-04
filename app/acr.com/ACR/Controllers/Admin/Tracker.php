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

		Session::put('tracker.days', $this->getValue('days', 1));

		Session::put('tracker.page', $this->getValue('page', 'main'));
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

			case 'users':
			default:
				return $this->users();
				break;
		}
	}

	public function main()
	{
		return View::make('admin.tracker.index')
				->with('sessions', TrackerInstance::lastSessions(60 * 24 * Session::get('tracker.days')))
				->with('title', 'Last activity log');
	}
		
	public function log($uuid)
	{
		return View::make('admin.tracker.log')
				->with('log', TrackerInstance::sessionLog($uuid))
				->with('title', 'Log');
	}

	public function summary()
	{
		return 
			View::make('admin.tracker.summary')
				->with('title', 'Summary');
	}

	public function apiPageviews()
	{
		return TrackerInstance::pageViews(
			60 * 24 * Session::get('tracker.days')
		)->toJson();
	}

	public function getValue($variable, $default = null)
	{
		if (Input::has($variable))
		{
			$value = Input::get($variable);
		}
		else
		{
			$value = Session::get('tracker.'.$variable, $default);
		}

		return $value;
	}

	public function users()
	{
		return View::make('admin.tracker.users')
				->with('users', TrackerInstance::users(60 * 24 * Session::get('tracker.days')))
				->with('title', 'Users');
	}

}