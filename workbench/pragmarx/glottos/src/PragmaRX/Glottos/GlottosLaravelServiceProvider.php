<?php namespace PragmaRX\Glottos;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

use PragmaRX\Glottos\Glottos;

use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\Filesystem;

use PragmaRX\Glottos\Support\Laravel\Lang as LaravelLang;

use PragmaRX\Glottos\Repositories\Cache\Cache;
use PragmaRX\Glottos\Repositories\DataRepository;
use PragmaRX\Glottos\Repositories\Messages\Message;
use PragmaRX\Glottos\Repositories\Messages\Translation;

use PragmaRX\Glottos\Repositories\Locales\LocaleRepository;
use PragmaRX\Glottos\Repositories\Locales\Language;
use PragmaRX\Glottos\Repositories\Locales\Country;
use PragmaRX\Glottos\Repositories\Locales\CountryLanguage;

use PragmaRX\Glottos\ThirdParties\Laravel\Commands\GlottosImportCommand;

class GlottosLaravelServiceProvider extends ServiceProvider {

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

		if( $this->getConfig('create_glottos_alias') )
		{
			AliasLoader::getInstance()->alias($this->getConfig('glottos_alias'), 'PragmaRX\Glottos\ThirdParties\Laravel\Facades\Glottos');
		}
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerFileSystem();

		$this->registerConfig();

		$this->registerLocale();

		$this->registerSentenceBag();
		
		$this->registerCache();

		$this->registerDataRepository();

		$this->registerMode();

		$this->registerGlottos();

		$this->registerLaravelLang();

		$this->registerImportCommand();

		$this->commands('glottos.command.import');
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

	private function registerFileSystem()
	{
		$this->app['glottos.fileSystem'] = $this->app->share(function($app)
		{
			return new Filesystem;
		});
	}

	private function registerConfig()
	{
		$this->app['glottos.config'] = $this->app->share(function($app)
		{
			return new Config($app['glottos.fileSystem'], $app);
		});
	}

	private function registerLocale()
	{
		$this->app['glottos.locale'] = $this->app->share(function($app)
		{
			return new Locale($this->getConfig('default_language_id'), $this->getConfig('default_country_id'));
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
			$messageModel = $this->getConfig('message_model');

			$translationModel = $this->getConfig('translation_model');

			$languageModel = $this->getConfig('language_model');

			$countryModel = $this->getConfig('country_model');

			$countryLanguageModel = $this->getConfig('country_language_model');

			$localeRepository = new LocaleRepository(
														new Language(new $languageModel, $this->app['glottos.cache']), 
														new Country(new $countryModel, $this->app['glottos.cache']), 
														new CountryLanguage(new $countryLanguageModel, $this->app['glottos.cache'])
													);

			return new DataRepository( 
										new Message(new $messageModel, $this->app['glottos.cache']),
										new Translation(new $translationModel, $this->app['glottos.cache']),
										$localeRepository,
										$this->app['glottos.config'],
										$app['glottos.fileSystem']
									);
		});
	}

	private function registerMode()
	{
		$this->app['glottos.mode'] = $this->app->share(function($app)
		{
			return new Mode($this->getConfig('mode'));
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
									$app['glottos.cache'],
									$app['glottos.mode'],
									$app['glottos.fileSystem']
								);
		});
	}

	private function registerLaravelLang()
	{
		$this->app['glottos.laravel.lang'] = $this->app->share(function($app)
		{
			return new LaravelLang($app['glottos']);
		});
	}

	private function registerImportCommand()
	{
		$this->app['glottos.command.import'] = $this->app->share(function($app)
		{
			return new GlottosImportCommand;
		});
	}

	public function getConfig($key)
	{
		return $this->app['config']["pragmarx/glottos::$key"];
	}
}
