<?php namespace PragmaRX\Construe;

use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;

use PragmaRX\Construe\Construe;

use PragmaRX\Construe\Support\Locale;
use PragmaRX\Construe\Support\SentenceBag;
use PragmaRX\Construe\Support\Config;

use PragmaRX\Construe\Repositories\Data\DataRepository;
use PragmaRX\Construe\Repositories\Messages\Message;
use PragmaRX\Construe\Repositories\Messages\Translation;

class ConstrueServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('pragmarx/construe', 'pragmarx/construe');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerConfig();

		$this->registerLocale();

		$this->registerSentenceBag();
		
		$this->registerDataRepository();

		$this->registerConstrue();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	private function registerConfig()
	{
		$this->app['construe.config'] = $this->app->share(function($app)
		{
			return new Config(new Filesystem, $app);
		});
	}

	private function registerLocale()
	{
		$this->app['construe.locale'] = $this->app->share(function($app)
		{
			return new Locale($app['config']['pragmarx/construe::default_language_id'], $app['config']['pragmarx/construe::default_country_id']);
		});
	}

	private function registerSentenceBag()
	{
		$this->app['construe.sentenceBag'] = $this->app->share(function($app)
		{
			return new SentenceBag($this->app['construe.config']);
		});
	}

	private function registerDataRepository()
	{
		$this->app['construe.dataRepository'] = $this->app->share(function($app)
		{
			$messageModel = new $this->app['config']['pragmarx/construe::models.messages'];
			$messageModel->setTable($this->app['config']['pragmarx/construe::tables.messages']);

			$translationModel = new $this->app['config']['pragmarx/construe::models.translations'];
			$translationModel->setTable($this->app['config']['pragmarx/construe::tables.translations']);

			return new DataRepository( 
										new Message(new $messageModel),
										new Translation(new $translationModel)
									);
		});
	}

	private function registerConstrue()
	{
		$this->app['construe'] = $this->app->share(function($app)
		{
			$app['construe.loaded'] = true;

			return new Construe(
									$app['construe.config'],
									$app['construe.locale'],
									$app['construe.sentenceBag'],
									$app['construe.dataRepository']
								);
		});
	}

}
