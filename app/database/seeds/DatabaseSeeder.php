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

		# Seeding of the user table to insert the admin
		$this->call('UserSeeder');
	}

}
