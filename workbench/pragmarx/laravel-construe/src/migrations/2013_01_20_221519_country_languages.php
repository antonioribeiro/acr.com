<?php

use Illuminate\Database\Migrations\Migration;

class CountryLanguages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construe_country_languages', function($table)
        {
            $table->increments('id',3);

            $table->string('language_id',3);
            $table->string('country_id',3);
            $table->string('regional_name',64);    
            $table->boolean('enabled')->default(false);
            
            $table->unique('regional_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construe_country_languages');
    }

}