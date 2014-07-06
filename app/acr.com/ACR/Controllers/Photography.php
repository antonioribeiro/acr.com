<?php namespace ACR\Controllers;

use File;
use Illuminate\Support\Facades\Response;
use Intervention;
use View;
use App;
use Event;
use Config;
use ACR\Services\Photoreader;

class Photography extends Base {

	public function __construct(Photoreader $reader)
	{
		$this->reader = $reader;

		$this->assetsPath = Config::get('app.photograpy.assets.path');
	}

	public function index()
	{
		return View::make('photography.index')
					->with('photos', $this->reader->getPhotos())
					->with('types', $this->reader->getTypes());
	}

	public function apiDownload($type, $file)
	{
		$file = public_path()."/".$this->assetsPath."/$type/$file";

		if (File::exists($file))
		{
			Event::fire('photography.api.download', $file);

			$response = Response::download($file);

			$response->setTtl(600);

			$response->expire(600);

			$response->setExpires(\Carbon\Carbon::now()->addDay(30));

			$response->setSharedMaxAge(600);

			return $response;
		}

		App::abort(404);
	}
}
