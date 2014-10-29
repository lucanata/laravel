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

## Catching the user data submitted by the login form
Route::post('login', array('uses' => 'HomeController@doLogin'));


## Routes for only logged users
Route::group(array('before' => 'auth'), function()
{
	Route::get('logout', array('as' => 'logout', 'uses' => 'HomeController@doLogout'));

	Route::get('/', array('as' => 'index', 'uses' => 'HomeController@showIndex'));

	Route::get('index', array('as' => 'index', 'uses' => 'HomeController@showIndex'));
});

## Routes for only guest users
Route::group(array('before' => 'guest'), function()
{
	Route::get('login', array('as' => 'login', 'uses' => 'HomeController@showLogin'));
});

## Routes for only admin
Route::group(array('before' => 'admin'), function()
{
	Route::get('register', array('as' => 'register', 'uses' => 'UserController@showRegister'));
});


?>