<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\Base;
use View;
use Input;
use Tracker;
use Session;

class UsageTracker extends Base {

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
				return $this->main();
				break;

			case 'users':
				return $this->users();
				break;

			case 'events':
				return $this->events();
				break;

			case 'errors':
				return $this->errors();
				break;
		}
	}

	public function main()
	{
		return View::make('admin.tracker.index')
				->with('sessions', Tracker::lastSessions(60 * 24 * Session::get('tracker.days')))
				->with('title', 'Visits');
	}
		
	public function log($uuid)
	{
		return View::make('admin.tracker.log')
				->with('log', Tracker::sessionLog($uuid))
				->with('title', 'Log');
	}

	public function summary()
	{
		return 
			View::make('admin.tracker.summary')
				->with('title', 'Page Views Summary');
	}

	public function apiPageviews()
	{
		return Tracker::pageViews(
			60 * 24 * Session::get('tracker.days')
		)->toJson();
	}

	public function apiPageviewsByCountry()
	{
		return Tracker::pageViewsByCountry(
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
				->with('users', Tracker::users(60 * 24 * Session::get('tracker.days')))
				->with('title', 'Users');
	}

	private function events()
	{
		return View::make('admin.tracker.events')
			->with('events', Tracker::events(60 * 24 * Session::get('tracker.days')))
			->with('title', 'Events');
	}

	public function errors()
	{
		return View::make('admin.tracker.errors')
			->with('error_log', Tracker::errors(60 * 24 * Session::get('tracker.days')))
			->with('title', 'Errors');
	}

}
