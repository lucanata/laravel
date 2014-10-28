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

## If not auth redirect to login
Route::get('/', array('uses' => 'HomeController@showHome'))->before('auth');

## If already logged redirect to home
Route::get('login', array('uses' => 'HomeController@showLogin'))->before('guest');

## Catching the user data submitted by the login form
Route::post('login', array('uses' => 'HomeController@doLogin'));

?>