<?php

use Illuminate\Database\Migrations\Migration;

class Messages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glottos_messages', function($table)
        {
            $table->increments('id',3);

            $table->string('hash',40); // this is the original untranslated message hash

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
        Schema::dropIfExists('glottos_messages');
    }

}