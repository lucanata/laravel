<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
	return View::make('hello');
}))->before('auth');

Route::get('login', array('as' => 'login', function () {}));

Route::post('login', function () {
	$user = array(
		'username' => Input::get('username'),
		'password' => Input::get('password')
	);

	if (Auth::attempt($user)) {
			return Redirect::route('home')
				->with('flash_notice', 'You are succesfully logged in.');
	}

	return Redirect::route('login')
		->with('flash_error', 'Your username/password combination was incorrect.')
		->withInput();

});