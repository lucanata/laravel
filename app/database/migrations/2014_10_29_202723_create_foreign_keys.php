<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_user', function($t) {
			$t->foreign('role_id')->references('id')->on('roles')
				->onUpdate('cascade')
		});
		Schema::table('role_user', function($t) {
			$t->foreign('user_id')->references('id')->on('users')
				->onUpdate('cascade')
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_user', function($t) {
			$t->dropForeign('role_user_role_id_foreign');
		});
		Schema::table('role_user', function($t) {
			$t->dropForeign('role_user_user_id_foreign');
		});
	}

}
