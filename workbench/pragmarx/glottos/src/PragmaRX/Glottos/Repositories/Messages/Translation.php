<?php namespace PragmaRX\Glottos\Repositories\Messages;
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

use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Locale;

class Translation extends MessageBase implements MessageInterface {

	public function find(Sentence $sentence, Locale $locale)
	{
		$cacheKey = __CLASS__.__FUNCTION__.$sentence->getId().$locale->getLanguage().$locale->getCountry();

		if( ! $cached = $model = $this->cache->get($cacheKey))
		{
			$model = $this->model
						->where('message_id', $sentence->getId())
						->where('language_id', $locale->getLanguage())
						->where('country_id', $locale->getCountry())
						->first();
		}

		if (is_null($model))
		{
			$sentence->translationFound = false;

			$sentence->setTranslation($sentence->getTranslation() ?: $sentence->getSentence());
		}
		else
		{
			$sentence->translationFound = true;
			
			$sentence->setTranslation($model->message);
		}

		if( ! $cached )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $sentence;
	}

	public function add(Sentence $translation, Locale $locale)
	{
		$model = $this->model->create(array(
										'message_id' => $translation->getId(),
										'language_id' => $locale->getLanguage(),
										'country_id' => $locale->getCountry(),
										'message' => $translation->getTranslation(),
										'translator_id' => isset($translation->translator) ? $translation->translator : null,
									));

		return $model;
	}

}