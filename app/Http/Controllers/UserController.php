<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use Input;
use Request;

class UserController extends Controller
{
    //
    public function index()
    {
    	return view('user.index');
    }

    public function postIndex()
    {
    	$userEmail = Request::get('email');
    	$password = Request::get('password');
    	if (Auth::attempt(['email' => $userEmail, 'password' => $password]))
		{
			return Redirect::intended('/');
		}

		return Redirect::back()
			->withInput()
			->withErrors('That username/password combo does not exist.');
    }

    public function getLogOut()
    {
    	Auth::logout();

    	return Redirect::to('/');
    }
}
