<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class users_controller extends Controller
{
    public function_construct(){
     parent::_construct();
      $this->beforeFilter('csrf', array('on'=>'post'));
      }


    public function getNewAccount(){
       return view::make('users.newaccount');
    }  

    public function postCreate(){
       $validator = validator::make(Input_all() User $rules);

        if ($validator->passes()) {
            $User = new User;
            $user ->firstname =Input::get('firstname');
            $user ->lastname =Input::get('lastname');
            $user ->email =Input::get('email');
            $user ->password =Hash::make(Input::get('password'));
            $user ->telephone = Input::get('telephone');
            $user -> (save);

          return Redirect::to('users/signin')
              ->with('message', 'Thank you for signing in to siri_me. ');
                     }

          return redirect::to('users/newaccount')
              ->with('message','Something went wrong');
              ->withErrors($validator)
              ->withInput();
          }
    public function getSignin(){
          return view::make('users, signin');
    }              

    public function postSignin(){
       if (Auth::attempt(array['email'=>Input::get('email'),'password'=>Input::get('password')])) {
           return Redirect::to['/']->with('message','you have signed in to siri_me');
       }
           return Redirect::to('users/signin')->with('message', 'Your email/password was in correct');
}
    
    public function getSignout(){
        Auth::logout();
            return Redirect::to('users/signin')->with('message', 'you have signed out');
    } 
   
    
}
