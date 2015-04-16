<?php

namespace App\Services;

use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Symfony\Component\Finder\Finder;
use Illuminate\Contracts\Filesystem\Factory as Filesystem;

class File {

	private $request;

	private $valid = true;

	private $error;

	private $fileFinder;

	private $fileName;

	private $filesystem;

	private $url;

	private $image;

	public function __construct($request, FileFinder $fileFinder, Filesystem $filesystem)
	{
		$this->request = $request;

		$this->fileFinder = $fileFinder;

		$this->filesystem = $filesystem;

		$this->parseRequest();
	}

	private function parseRequest()
	{
		if ( ! $this->url = $this->request->query->get('url'))
		{
			$this->valid = false;

			$this->error = 'URL not provided.';
		}

		$this->findFile($this->url);

		$this->processTransformations();
	}

	public function isValid()
	{
		return $this->valid;
	}

	public function getError()
	{
		return $this->error;
	}

	public function download()
	{
		return [
			'success' => true,
		];
	}

	private function findFile($url)
	{
		$this->parseFileName($url);

		if ( ! $this->fileFinder->find($this->fileName))
		{
			$this->fetchOriginal();
		}
	}

	private function parseFileName($url)
	{
		$this->urlHash = SHA1($url);

		$extension = $this->getExtension($url);

		$this->fileName =
			$this->getBaseDir() .
			DIRECTORY_SEPARATOR .
			$this->makeDeepPath($this->urlHash) .
			DIRECTORY_SEPARATOR .
			$this->urlHash .
			'.' . $extension;
	}

	private function makeDeepPath($string)
	{
		$path = '';

		for ($x = 0; $x <= min(8, strlen($string)); $x++)
		{
			$path .= ($path ? DIRECTORY_SEPARATOR : '') . $string[$x];
		}

		return $path;
	}

	private function getBaseDir()
	{
		return 'files';
	}

	private function fetchOriginal()
	{
		$contents = file_get_contents($this->url);

		$this->filesystem->put($this->fileName, $contents);
	}

	private function processTransformations()
	{
		$transformed = false;

		foreach ($this->request->except('url') as $transformation)
		{
			$this->instantiateImage();

			$this->image = $this->transformImage($this->image, $transformation);

			$transformed = true;
		}

		if ($transformed)
		{
			$this->image->save($this->getTransformedName());
		}
	}

	private function instantiateImage()
	{
		if ( ! $this->image)
		{
			$manager = new ImageManager(array('driver' => 'imagick'));

			$this->image = $manager->make(
				$this->filesystem->getDriver()->getAdapter()->applyPathPrefix($this->fileName)
			);
		}
	}

	private function getTransformedName()
	{
		$name = $this->fileName;

		foreach ($this->request->except('url') as $transformation)
		{
			$name .= '+' . $transformation;
		}

		return str_slug($name);
	}

	private function getExtension($url)
	{
		return pathinfo($url, PATHINFO_EXTENSION);
	}

	private function transformImage($image, $transformation)
	{
		return $image;
	}

}
