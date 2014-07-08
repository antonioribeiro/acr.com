<?php

use PragmaRX\Support\Migration;

class AddRemembertokenToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::table('users', function($table)
		{
			$table->string('remember_token', 100)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
		Schema::table('users', function($table)
		{
			$table->dropColumn('remember_token');
		});
	}

}
