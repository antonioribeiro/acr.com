<?php namespace PragmaRX\Glottos\Repositories\Locales;
/**
 * Part of the Glottos package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Glottos
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

use PragmaRX\Glottos\Support\Locale;

class CountryLanguage extends LocaleBase implements CountryLanguageInterface {

	public function find(Locale $locale)
	{
		$cacheKey = __CLASS__.__FUNCTION__.$locale->getLanguage().$locale->getCountry();

		if( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model
							->where('language_id', $locale->getLanguage())
							->where('country_id', $locale->getCountry())
							->first();

		}
	
		if( ! $cached && $model )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $model;
	}

	public function findById($id)
	{
		$cacheKey = __CLASS__.__FUNCTION__.'id'.$id;

		if( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model->find($id);

		}
	
		if( ! $cached && $model )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $model;
	}
	
	public function all()
	{
		return $this->model
				->with('language')
				->with('country')
				->orderBy('enabled', 'desc')
				->orderBy('regional_name')
				->get();
	}

	public function enableDisableLanguage($id, $enable)
	{
		$language = $this->findById($id);

		$language->enabled = $enable;

		$language->save();
	}
}