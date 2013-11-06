<?php

use Illuminate\Database\Migrations\Migration;

class MessagesHashes extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construe_messages_hashes', function($table)
        {
            $table->increments('id');

            $table->string('message_hash',40); // this is the original untranslated message hash

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
        Schema::dropIfExists('construe_messages_hashes');
    }

}