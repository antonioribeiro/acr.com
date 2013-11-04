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

            $table->string('language_id',3);
            $table->string('country_id',3);
            $table->integer('module_id');
            $table->string('message_hash',40); // this is the original untranslated message hash
            $table->text('message');
            $table->integer('translator_id');
            $table->boolean('auto_inserted')->default(false);
            $table->timestamps();
            
            $table->unique(array('language_id','country_id','message_hash'));
        });

        $statement = "
                        CREATE OR REPLACE RULE construe_messages_insert_rule AS ON INSERT
                            TO construe_messages 
                            WHERE EXISTS (select id from construe_messages where language_id=NEW.language_id and country_id=NEW.country_id and message_hash=NEW.message_hash)
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