<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use ACR\Models\Article;

class UseModel extends Command {

	protected $name = 'model';

	protected $description = 'Command description.';

	public function __construct()
	{
		parent::__construct();
	}

	public function fire()
	{
		var_dump(Article::all());
	}

	protected function getArguments()
	{
		return array(
		);
	}

	protected function getOptions()
	{
		return array(
		);
	}

}
