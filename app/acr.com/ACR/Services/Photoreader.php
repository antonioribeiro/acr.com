<?php
namespace ACR\Services;

use File;
use Intervention;
use URL;
use Config;

class Photoreader {

	private $photos = [];

	private $types;

	private $systemPath;

	public function __construct()
	{
		$assetsPath = Config::get('app.photograpy.assets.path');

		$this->htmlPath = URL::to('/') . '/' . $assetsPath;

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

		unset($this->types[array_search('other', $this->types)]);

		$this->types[] = 'other';
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
					$this->checkThumbnail($type, $photo, $thumbnailName);

					$link = route('photography.api.download', ['type' => $type, 'photo' => basename($photo)]);

					// $thumbLink = $this->htmlPath.'/'.$type.'/'.$thumbnailName;

					$thumbLink = route('photography.api.download.thumbnail', ['type' => $type, 'photo' => basename($photo)]);

					$info = getimagesize($photo);

					$size = substr(basename($photo), 0, 1) == 'L' ? 'L' : 'N';

					$width = $info[0];

					$height = $info[1];

					$this->photos[] = [
						'type' => $type,
						'thumbnail' => $thumbLink,
						'photography' => $link,
						'width' => $width,
						'height' => $height,
						'size' => ($width > $height ? '32' : '23'),
					];
				}
			}
		}

		shuffle($this->photos);
	}

	private function checkThumbnail($type, $photo, &$thumbnailName)
	{
		$thumbnailName = pathinfo($photo, PATHINFO_FILENAME) . '.thumb.' . pathinfo($photo, PATHINFO_EXTENSION);

		$thumbFile = $this->systemPath . '/' . $type . '/' . $thumbnailName;

		$file = $this->systemPath . '/' . $type . '/' . basename($photo);

		// $this->generateThumbnail($file, $thumbFile);
	}

	private function generateThumbnail($file, $thumbFile)
	{
		if ( ! File::exists($thumbFile))
		{
			$image = Intervention::make($file);

			if ($image->height() > $image->width())
			{
				$height = 750;
				$width = 500;
			}
			else
			{
				$height = 500;
				$width = 750;
			}

			// Crop to portrait
			// $image->crop($image->height / 1.5, $image->height)->resize(300, null, true)->save($thumbFile);

			$image->resize($width, $height, true)->save($thumbFile);
		}
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
