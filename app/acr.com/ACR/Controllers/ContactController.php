<?php namespace ACR\Controllers;

use Validator;
use Redirect;
use Input;
use View;
use Session;
use Mail;
use User;

class ContactController extends BaseController {

    public function show()
    {
        return View::make('home.contact')
                ->with('messages', Session::get('messages'));
    }

    public function send()
    {
        $input = Input::all();
        
        $validator = Validator::make(
            $input,
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
            return Redirect::route('contact')
                    ->withMessages($validator->messages()->all())
                    ->withInput();
        }

        Mail::send('home.emails.contact', ['data' => $input], function($message) use ($input)
        {
            $message->to('acr@antoniocarlosribeiro.com');

            $message->subject('Web Sight Message - from: '.$input['email']);
        });

        User::createUser($input);

        return View::make('home.message')
                ->with('title', 'Thanks!')
                ->with('message', 'Your message has been received.');
    }

}