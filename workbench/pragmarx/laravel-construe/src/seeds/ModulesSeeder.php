<?php

class ConstrueModulesTableSeeder extends Seeder {

    public function run()
    {
        $table = 'construe_modules';

        DB::table($table)->truncate();      

        DB::table($table)->insert(
                                    array( 
                                            'name'=>'Application', 
                                            'created_at' => new DateTime, 
                                            'updated_at' => new DateTime
                                        )
                                );

    }
    
}