<?php namespace ACR\Controllers;

use Validator;
use Redirect;
use Input;
use View;
use Session;

class ContactController extends BaseController {

	public function show()
	{
		return View::make('home.contact')
				->with('messages', Session::get('messages'));
	}

	public function send()
	{
		$validator = Validator::make(
		    Input::all(),
		    array(
		    		'name' => 'required|min:5',
		    		'email' => 'required|email',
		    		'telephone' => 'required',
		    		'subject' => 'required',
		    		'message' => 'required',
		    	)
		);

		if ($validator->fails())
		{
			return Redirect::route('contact')->withMessages($validator->messages()->all())->withInput();
		}

		return 1;
	}

}