<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class RandomArticlePhoto {

	private static $photos = [
		[
			'file' => 'eiffel.png',
			'file_original' => 'landscape/Paris-TourEiffel.jpg',
		    'title_en' => 'Paris, France, 09/2010',
		    'title_pt_br' => 'Paris, França, 09/2010',
		],
		[
			'file' => 'venice.jpg',
			'file_original' => 'landscape/Venice.jpg',
			'title_en' => 'Venice, Italy, 09/2010',
			'title_pt_br' => 'Veneza, Itália, 09/2010',
		],
		[
			'file' => 'pier.jpg',
			'file_original' => 'landscape/RioDasOstras-Pier.jpg',
			'title_en' => 'Rio das Ostras, Brazil, 06/2010',
			'title_pt_br' => 'Rio das Ostras, Brasil, 06/2010',
		],
	];

	public static function random()
	{
		return static::$photos[static::getNumber()];
	}

	private static function getNumber()
	{
		$photos = Session::get('photos_array');

		if ( ! $photos)
		{
			$photos = array_keys(static::$photos);

			// shuffle($photos);
		}

		$photo = array_pop($photos);

		Session::put('photos_array', $photos);

		return $photo;
	}

}
