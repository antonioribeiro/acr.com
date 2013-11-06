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
        Schema::create('construe_messages', function($table)
        {
            $table->increments('id');

            $table->string('language_id',3);                    // pt
            $table->string('country_id',3);                     // br
            $table->integer('module_id');                       // application
            $table->integer('message_hash_id');                 // this is the original untranslated message hash
            $table->text('message');                            // this is the translation
            $table->integer('translator_id')->nullable();       // user_id
            $table->boolean('auto_inserted')->default(false);   // was it auto inserted by the system?
            $table->timestamps();                       
            
            $table->unique(array('language_id','country_id','message_hash_id'));
        });

        $statement = "
                        CREATE OR REPLACE RULE construe_messages_insert_rule AS ON INSERT
                            TO construe_messages 
                            WHERE EXISTS (select id from construe_messages where language_id=NEW.language_id and country_id=NEW.country_id and message_hash_id=NEW.message_hash_id)
                            DO NOTHING;
                    ";

        DB::unprepared($statement);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP RULE construe_messages_insert_rule ON construe_messages;');
        Schema::dropIfExists('construe_messages');
    }

}