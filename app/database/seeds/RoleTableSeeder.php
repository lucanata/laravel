<?php

## Seeder for the role table to create the admin user
class RoleTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('roles')->delete();
		Role::create(array(
			'name'		=> 'admin',
		));

	}


}

?>