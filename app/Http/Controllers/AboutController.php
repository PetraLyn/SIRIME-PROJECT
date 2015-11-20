<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(){
    $request=\Input::all();
    \Mail::send('emails.contactmessage',
        array(
            'name' => $request['name'],
            'email' => $request['email'],
            'user_message' => $request['message']
        ), function($message)
    {
        $message->from('violetsusan5@gmail.com');
        $message->to('philisombikhwa@gmail.com', 'Admin')->subject('Get in touch!Feedback');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

}
}
