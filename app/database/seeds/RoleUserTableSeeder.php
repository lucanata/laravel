<?php

## Seeder for the role_user table to create the admin user
class RoleUserTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('role_user')->delete();
		DB::table('role_user')->insert(array(
			'user_id' => 0,
			'role_id' => 0
		));

	}


}

?>