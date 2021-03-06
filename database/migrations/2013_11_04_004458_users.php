<?php

use App\Data\Models\User;
use PragmaRX\Support\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		$user = new User;
		$user->first_name = 'Antonio Carlos';
		$user->last_name = 'Ribeiro';
		$user->email = 'acr@antoniocarlosribeiro.com';
		$user->password = '$2y$08$1UemL1yG5MPfR3B4lvRwgeXDoIctBbfWYyiU5mefdhq1jpQTMWQOO';
		$user->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
	}

}
