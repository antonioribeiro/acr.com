<?php

namespace App\Services;

class Processor {

	private $image;

	private $fileFactory;

	private $file;

	public function __construct(FileFactory $fileFactory)
	{
		$this->fileFactory = $fileFactory;
	}

	public function process($request)
	{
		$this->file = $this->fileFactory->make($request);

		$this->processFile();

		return $this->file;
	}

	public function make($file)
	{
		$file = $this->finder->find($file);

		$this->image = $this->imageManager->make($file);

		return $this;
	}

	function __call($name, $arguments)
	{
		$this->image = call_user_func_array([$this->imageManager, $name], $arguments);

		return $this;
	}

	private function processFile()
	{

	}

}
