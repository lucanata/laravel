<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('index');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$user = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if (Auth::attempt($user)) {
			return Redirect::intended('home')
				->with('flash_notice', 'You are succesfully logged in.');
		}
		else{
			return Redirect::route('login')
				->with('flash_error', 'Your username/password combination was incorrect.')
				->withInput();
		}

	}

	public function doLogout()
	{
		Auth::logout();

		return Redirect::route('login')
			->with('flash_notice', 'You are successfully logged out.');
	}
}
