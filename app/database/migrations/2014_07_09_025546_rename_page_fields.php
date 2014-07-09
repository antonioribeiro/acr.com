<?php

use PragmaRX\Support\Migration;

class RenamePageFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::table('pages', function($table)
		{
			$table->string('name')->nullable();

			$table->renameColumn('name_en', 'title_en');
			$table->renameColumn('name_pt_br', 'title_pt_br');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
		Schema::table('pages', function($table)
		{
			$table->dropColumn('name');

			$table->renameColumn('title_en', 'name_en');
			$table->renameColumn('title_pt_br', 'name_pt_br');
		});
	}

}
