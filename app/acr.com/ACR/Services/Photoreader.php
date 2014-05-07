<?php
namespace ACR\Services;

use File;
use Intervention\Image\Image;
use URL;

class Photoreader {

	private $photos = [];

	private $types;

	private $systemPath;

	public function __construct()
	{
		$assetsPath = '/assets/layouts/photography/img/photos';

		$this->htmlPath = URL::to('/') . $assetsPath;

		$this->systemPath = public_path() . '/' . $assetsPath;

		$this->read();
	}

	private function read()
	{
		$dirs = File::directories($this->systemPath);

		$this->generateTypes($dirs);

		$this->generatePhotos($this->types);
	}

	public function getPhotos()
	{
		return $this->photos;
	}

	public function getTypes()
	{
		return $this->types;
	}

	private function generateTypes($dirs)
	{
		$this->types = [];

		foreach($dirs as $dir)
		{
			$this->types[] = basename($dir);
		}
	}

	private function generatePhotos($types)
	{
		$this->photos = [];

		foreach ($types as $type)
		{
			$photos = File::files($this->systemPath.'/'.$type);

			foreach($photos as $photo)
			{
				if ($this->isImage($photo) && ! $this->isThumbnail($photo))
				{
					$this->checkThumbnail($type, $photo, $thumbnailName, $width, $height);

					$link = $this->htmlPath.'/'.$type.'/'.basename($photo);

					$thumbLink = $this->htmlPath.'/'.$type.'/'.$thumbnailName;

					$this->photos[] = [
						'type' => $type,
						'thumbnail' => $thumbLink,
						'photography' => $link,
						'width' => $width,
						'height' => $height,
					];
				}
			}
		}

		shuffle($this->photos);
	}

	private function checkThumbnail($type, $photo, &$thumbnailName, &$width, &$height)
	{
		$thumbnailName = pathinfo($photo, PATHINFO_FILENAME) . '.thumb.' . pathinfo($photo, PATHINFO_EXTENSION);

		$thumbFile = $this->systemPath . '/' . $type . '/' . $thumbnailName;

		$file = $this->systemPath . '/' . $type . '/' . basename($photo);

		$this->generateThumbnail($file, $thumbFile, $width, $height);
	}

	private function generateThumbnail($file, $thumbFile, &$width, &$height)
	{
		if (! File::exists($thumbFile))
		{
			$image = Image::make($file);

			$name = strtolower(basename($file));

			if ($image->height > $image->width)
			{
				$height = 400;
				$width = null;
			}
			else
			{
				$height = null;
				$width = 300;
			}

			// Crop to portrait
			// $image->crop($image->height / 1.5, $image->height)->resize(300, null, true)->save($thumbFile);

			$image->resize($width, $height, true)->save($thumbFile);
		}
		else
		{
			$image = Image::make($thumbFile);
		}

		$width = $image->width;

		$height = $image->height;
	}

	private function isThumbnail($photo)
	{
		return strpos(basename($photo), '.thumb') !== false;
	}

	private function isImage($file)
	{
		return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'gif', 'png']);
	}
}

