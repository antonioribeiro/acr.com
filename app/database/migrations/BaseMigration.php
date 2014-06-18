<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

abstract class BaseMigration extends Migration
{
	protected $connection;

	protected $schemaBuilder;

	protected $tables = array();

	public function __construct()
	{
		$this->connection = DB::connection();

		$this->schemaBuilder = $this->connection->getSchemaBuilder();
	}

	public function up()
	{
		$this->executeInTransaction('migrateUp');
	}

	public function down()
	{
		$this->executeInTransaction('migrateDown');
	}

	abstract protected function migrateUp();

	abstract protected function migrateDown();

	protected function executeInTransaction($method)
	{
		$this->connection->beginTransaction();

		try
		{
			$this->{$method}();
		}
		catch (\Exception $exception)
		{
			$this->connection->rollback();

			$this->handleException($exception);
		}

		$this->connection->commit();
	}

	protected function dropAllTables()
	{
		foreach($this->tables as $table)
		{
			if ($this->tableExists($table))
			{
				$this->schemaBuilder->drop($table);
			}
		}
	}

	protected function tableExists($table)
	{
		return $this->schemaBuilder->hasTable($table);
	}

	/**
	 * @param $exception
	 */
	protected function handleException($exception)
	{
		$previous = method_exists($exception, 'getPrevious')
					? $exception->getPrevious()
					: null;

		if ($exception instanceof \Illuminate\Database\QueryException)
		{
			throw new $exception($exception->getMessage(), $exception->getBindings(), $previous);
		}
		else
		{
			throw new $exception($exception->getMessage(), $previous);
		}
	}

}
