<?php

namespace App\Http\Controllers;

use Session, Input, Validator, Redirect;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
      public function postLogin(Request $request)
	  {
	    
	      $this->validate($request, array(
				'email' => 'required|exists:users',
	          	'password' => 'required'
			));
	 
	      $credentials = [
	          'email' => $request->email,
	          'password' => $request->password,
	          'confirmed' => 1
	      ];
	 
	      if ( ! Auth::attempt($credentials))
	      {
	        Session::flash('warning', 'Username or password incorrect.');
	        return Redirect::to('login');
	      }
	      Session::flash('success', 'You have successfully logged in.!');
	      return redirect()->route('user.dashboard');

	  }
}
