<?php

use Illuminate\Database\Migrations\Migration;

class Countries extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construe_countries', function($table)
        {
            $table->string('id',3)->primary();

            $table->string('name',64)->unique();
            
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
        Schema::dropIfExists('construe_countries');
    }

}