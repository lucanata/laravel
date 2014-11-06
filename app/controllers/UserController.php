<?php

class Usercontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /usercontroller
	 *
	 * @return Response
	 */
	public function showRegistration()
	{
		return View::make('register');	
	}

	public function doRegistration()
	{	
		# Getting all of the post data
		$postData = Input::all();

		# Setting up custom error messages for the field validation
		$messages = array(
			'required' => "We need to know the :attribute.",
			'same' => "The two passwords does not match.",
			'unique' => "Username already taken."	
		);

		# Setting the validations
		$rules = array(
			'email' => 'required|email',
			'name' => 'required',
			'surname' => 'required',
			'username' => 'required|unique:users',
			'password' => 'required',
			'cpassword' => 'required|same:password'
			);

		# Doing the validations
		$validator = Validator::make($postData, $rules, $messages);

		if ($validator->fails())
		{
			$error_string = '';

			foreach ($validator->messages()->all(':message<br>') as $message)
			{
				$error_string = $error_string . $message;
			}

			return Redirect::to('register')
				->with('flash_error', $error_string);
		}
		else
		{
			#Selecting only user data
			$user 					=	new User;
			$user->name 			=	$postData['name'];
			$user->surname 			=	$postData['surname'];
			$user->email 			= 	$postData['email'];
			$user->username 		=   $postData['username'];
			$user->password 		= 	Hash::make($postData['password']);
			$user->save();

			$passed_role = $postData['role'];

			$role = Role::where('name','=',$passed_role)->first();

			$user->attachRole($role);

			return Redirect::to('register')
				->with('flash_notice', 'User succesfully registered.');
		}
	}

	public function deleteUser()
	{
		return true;
	}


}