<?php

class CreateTestTable extends BaseMigration {

	public function migrateUp()
	{
		throw new Exception('this is an error in up');
	}

	public function migrateDown()
	{
		throw new Exception('this is an error in down');
	}

}
