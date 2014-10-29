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
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showHome'))->before('auth');

## If already logged redirect to home
Route::get('login', array('as' => 'login', 'uses' => 'HomeController@showLogin'))->before('guest');

## Catching the user data submitted by the login form
Route::post('login', array('uses' => 'HomeController@doLogin'));

## If already guest redirect to home
Route::get('logout', array('as' => 'logout', 'uses' => 'HomeController@doLogout'))->before('auth');

?>