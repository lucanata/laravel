<?php

class Usercontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /usercontroller
	 *
	 * @return Response
	 */
	public function showRegister()
	{
		return View::make('register');	
	}

	public function doRegistration()
	{

	}

	public function deleteUser()
	{

	}


}