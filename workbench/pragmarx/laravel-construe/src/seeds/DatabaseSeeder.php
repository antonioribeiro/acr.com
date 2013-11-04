<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('ConstrueCountriesTableSeeder');
		$this->call('ConstrueLanguagesTableSeeder');
		$this->call('ConstrueModulesTableSeeder');
		$this->call('ConstrueCountryLanguagesTableSeeder');
	}

}
