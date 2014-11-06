<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, HasRole;

	/*
			user = new User;								create a new user
			user->name = 'ccccc';							fill the name field of the user
			user->save();									save the user on the db
			user->roles;   									give the roles assigned to a user
			user->hasRole($name);							check if a user has the $name role
			user->can($permission);							return a true boolean if a user can $permission
			user->ability($roles, $permissions, $options);	
			user->roles()->attach($role->id);				attach a role to a user
			
	*/
	# The database table used by the model.
	protected $table = 'users';

	# The field that can be assigned with mass-assignment.
	protected $fillable = ['name', 'surname', 'email', 'password', 'username'];

	# The attributes excluded from the model's JSON form.
	protected $hidden = array('password', 'remember_token');

}

?>
