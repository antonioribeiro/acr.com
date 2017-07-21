<?php

use PragmaRX\Support\Migration;

class AddContactMessagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::create('contact_messages', function($table)
		{
            $table->increments('id');

            $table->string('name');
            $table->string('email');
            $table->string('telephone');
            $table->string('subject');
            $table->text('message');
            $table->string('ip_address');

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
        Schema::dropIfExists('contact_messages');
	}
}
