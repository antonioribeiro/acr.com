<?php namespace ACR\Controllers;

use \Controller;
use \View;
use \Event;

class Base extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function __construct()
	{
		// $this->beforeFilter(function()
		// {
		//     Event::fire('clockwork.controller.start');
		// });

		// $this->afterFilter(function()
		// {
		//     Event::fire('clockwork.controller.end');
		// });
	}
}