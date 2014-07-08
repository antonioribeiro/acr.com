<?php

use PragmaRX\Support\Migration;

class CreateArticleLanguages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function migrateUp()
    {
        Schema::table('articles', function($table)
        {
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('article', 'article_en');
            $table->text('title_pt_br')->nullable();
            $table->text('article_pt_br')->nullable();
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
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('article_en', 'article');
            $table->dropColumn('title_pt_br');
            $table->dropColumn('article_pt_br');
        });
    }

}
