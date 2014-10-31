<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

<<<<<<< HEAD
		# Seeding of the user table to insert the admin
		$this->call('UserSeeder');
=======
		## Seeding of the user table to insert the admin
		$this->call('UserTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('RoleUserTableSeeder');

		// $this->call('UserTableSeeder');
>>>>>>> f1249d54f81a1697496cdfa1e9692745d235c6d9
	}

}
