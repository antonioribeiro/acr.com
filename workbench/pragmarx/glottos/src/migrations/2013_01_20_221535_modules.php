<?php

use Illuminate\Database\Migrations\Migration;

class Modules extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glottos_modules', function($table)
        {
            $table->increments('id');

            $table->string('name',255);
            $table->unique('name');

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
        Schema::dropIfExists('glottos_modules');
    }

}