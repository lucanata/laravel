<?php

## Seeder for the user table to create the admin user
class UserSeeder extends Seeder 
{
	public function run()
	{
		DB::table('users')->delete();
		$user 					=	new User;
		$user->name 			=	'Luca';
		$user->surname 			=	'Natali';
		$user->email 			= 	'natali.luca0@gmail.com';
		$user->username 		=   'admin';
		$user->password 		= 	Hash::make('admin');
		$user->save();

		DB::table('roles')->delete();
		DB::table('assigned_roles')->delete();
		$admin = new Role;
		$admin->name 			=	'admin';
		$admin->save();

		$user->attachRole($admin);

		$userrole = new Role;
		$userrole->name 		=	'user';
		$userrole->save();
	}
}

?>
