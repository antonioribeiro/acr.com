<?php namespace PragmaRX\Glottos;

use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;

use PragmaRX\Glottos\Glottos;

use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Config;

use PragmaRX\Glottos\Repositories\Cache\Cache;
use PragmaRX\Glottos\Repositories\Data\DataRepository;
use PragmaRX\Glottos\Repositories\Messages\Message;
use PragmaRX\Glottos\Repositories\Messages\Translation;

class GlottosServiceProvider extends ServiceProvider {

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
		$this->package('pragmarx/glottos', 'pragmarx/glottos');
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
		
		$this->registerCache();

		$this->registerDataRepository();

		$this->registerGlottos();
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
		$this->app['glottos.config'] = $this->app->share(function($app)
		{
			return new Config(new Filesystem, $app);
		});
	}

	private function registerLocale()
	{
		$this->app['glottos.locale'] = $this->app->share(function($app)
		{
			return new Locale($app['config']['pragmarx/glottos::default_language_id'], $app['config']['pragmarx/glottos::default_country_id']);
		});
	}

	private function registerSentenceBag()
	{
		$this->app['glottos.sentenceBag'] = $this->app->share(function($app)
		{
			return new SentenceBag($this->app['glottos.config']);
		});
	}

	private function registerCache()
	{
		$this->app['glottos.cache'] = $this->app->share(function($app)
		{
			return new Cache();
		});
	}

	private function registerDataRepository()
	{
		$this->app['glottos.dataRepository'] = $this->app->share(function($app)
		{
			$messageModel = new $this->app['config']['pragmarx/glottos::messages_model'];

			$translationModel = new $this->app['config']['pragmarx/glottos::translations_model'];

			return new DataRepository( 
										new Message(new $messageModel, $this->app['glottos.cache']),
										new Translation(new $translationModel, $this->app['glottos.cache']),
										$this->app['glottos.config']
									);
		});
	}

	private function registerGlottos()
	{
		$this->app['glottos'] = $this->app->share(function($app)
		{
			$app['glottos.loaded'] = true;

			return new Glottos(
									$app['glottos.config'],
									$app['glottos.locale'],
									$app['glottos.sentenceBag'],
									$app['glottos.dataRepository'],
									$app['glottos.cache']
								);
		});
	}

}
