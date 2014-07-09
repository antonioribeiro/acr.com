<?php

use PragmaRX\Support\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::create('articles', function($table)
		{
			$table->increments('id');
		    $table->text('title');
		    $table->text('article');
		    $table->text('slug')->index();
		    $table->integer('author_id');
		    $table->timestamp('published_at')->nullable();
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
		Schema::dropIfExists('articles');
	}

}
