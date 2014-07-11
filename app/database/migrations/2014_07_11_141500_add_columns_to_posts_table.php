<?php

use PragmaRX\Support\Migration;

class AddColumnsToPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::create('articles', function($table)
		{
			$table->string('photo')->nullable();
			$table->string('photo_title_en')->nullable();
			$table->string('photo_title_pt_br')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
		Schema::table('articles', function($table)
		{
			$table->dropColumn('photo');
			$table->dropColumn('photo_title_en');
			$table->dropColumn('photo_title_pt_br');
		});
	}

}
