<?php

namespace App\Http\Controllers;

use Validator;
use Redirect;
use View;
use Session;
use Mail;
use App\Data\Models\User;
use App\Data\Models\ContactMessage;

class Contact extends Base
{
    public function show()
    {
        return View::make('home.contact')
                ->with('messages', Session::get('messages'));
    }

    public function send()
    {
        $input = request()->all();
        
        $validator = Validator::make(
            $input,
            array(
                    'name' => 'required|min:4',
                    'email' => 'required|email',
                    'telephone' => 'required',
                    'subject' => 'required',
                    'message' => 'required',
                )
        );

        $this->storeMessage($input);

        if ($validator->fails())
        {
            return Redirect::route('contact')
                    ->withMessages($validator->messages()->all())
                    ->withInput();
        }

        Mail::send('home.emails.contact', ['data' => $input], function($message) use ($input)
        {
            $message->to('acr+website@antoniocarlosribeiro.com');

            $message->subject('Web Sight Message - from: '.$input['email']);
        });

        User::createUser($input);

        return View::make('home.message')
                ->with('title', 'Thanks!')
                ->with('message', 'Your message has been received.');
    }

    private function storeMessage($input)
    {
        ContactMessage::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'telephone' => $input['telephone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
            'ip_address' => request()->ip()
        ]);
    }
}
