<?php

use Illuminate\Database\Migrations\Migration;

class MessagesTrigger extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        $statement = "
                        CREATE FUNCTION construe_cascade_translations() RETURNS trigger AS $$
                        BEGIN
                            if not NEW.auto_inserted then
                                INSERT INTO construe_messages (language_id, country_id, module_id, message_hash, translator_id, message, auto_inserted, created_at, updated_at)
                                    SELECT l.language_id, l.country_id, m.module_id, m.message_hash, 0, m.message, true, 'NOW', 'NOW'
                                    FROM construe_messages m
                                    JOIN construe_country_languages l on l.enabled = true and (not (l.language_id = 'en' and l.country_id = 'US'))
                                    WHERE m.language_id = 'en'
                                        AND m.country_id = 'US'
                                        AND (module_id,message_hash) NOT IN
                                            (SELECT module_id,message_hash FROM construe_messages where language_id = l.language_id and country_id = l.country_id);
                            end if;

                            RETURN NEW;
                        END;
                        $$ LANGUAGE plpgsql;
                    ";

        DB::unprepared($statement);

        $statement = "
                        CREATE TRIGGER construe_messages_after_insert
                        BEFORE INSERT ON construe_messages
                        FOR EACH ROW
                        EXECUTE PROCEDURE construe_cascade_translations();
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
        DB::unprepared('DROP TRIGGER construe_messages_after_insert ON construe_messages;');
        DB::unprepared('DROP FUNCTION construe_cascade_translations();');
    }

}