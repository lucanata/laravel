<?php

## Seeder for the user table to create the admin user
class UserTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name' 		=> 'Luca',
			'surname' 	=> 'Natali',
			'email'		=> 'natali.luca0@gmail.com',
			'password'	=> Hash::make('admin'),
			'username'	=> 'admin',
		));
	}


}

?>
