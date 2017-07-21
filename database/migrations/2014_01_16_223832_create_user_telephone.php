<?php

use PragmaRX\Support\Migration;

class CreateUserTelephone extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
        Schema::table('users', function($table)
        {
            $table->text('telephone')->nullable();
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
            $table->dropColumn('telephone');
        });
	}

}
