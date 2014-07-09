<?php

use PragmaRX\Support\Migration;

class CreateSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::create('sessions', function($table)
		{
		    $table->string('id')->unique();
		    $table->text('payload');
		    $table->integer('last_activity');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
		Schema::dropIfExists('sessions');
	}

}
