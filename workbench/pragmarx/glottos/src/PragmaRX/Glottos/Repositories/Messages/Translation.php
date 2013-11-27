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
						->with('message')
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
			
			$sentence->setTranslation($model->translation);
		}

		if( ! $cached )
		{
			$this->cache->put($cacheKey, $model);
		}

		return $sentence;
	}

	public function findById($message_id, Locale $locale)
	{
		return $this->model
						->with('message')		
						->where('message_id', $message_id)
						->where('language_id', $locale->getLanguage())
						->where('country_id', $locale->getCountry())
						->first();
	}

	public function add(Sentence $translation, Locale $locale)
	{
		$model = $this->model->create(array(
										'message_id' => $translation->getId(),
										'language_id' => $locale->getLanguage(),
										'country_id' => $locale->getCountry(),
										'translation' => $translation->getTranslation(),
										'translator_id' => isset($translation->translator) 
														   ? $translation->translator 
														   : null,
									));

		return $model;
	}

	public function getAll(Locale $localePrimary = null, Locale $localeSecondary = null) // Locale $primary, Locale $secondary
	{
		$db = $this->model->getConnection();

		// $db->listen(function($sql, $bindings, $time) { var_dump($sql); var_dump($bindings);});

		$rows = $this->model->getConnection()

							->table('glottos_messages as gm')

				            ->leftJoin('glottos_translations as gtp', function($join) use ($db, $localePrimary) {
				            	$join->on('gtp.message_id', '=', 'gm.id')
				            		->on('gtp.language_id', '=', $db->raw("'".$localePrimary->getLanguage()."'"))
				            		->on('gtp.country_id', '=', $db->raw("'".$localePrimary->getCountry()."'"));
				            })

				            ->leftJoin('glottos_translations as gts', function($join) use ($db, $localeSecondary) {
				            	$join->on('gts.message_id', '=', 'gm.id')
				            		->on('gts.language_id', '=', $db->raw("'".$localeSecondary->getLanguage()."'"))
				            		->on('gts.country_id', '=', $db->raw("'".$localeSecondary->getCountry()."'"));
				            })

				            ->select( 	 'gm.id as message_id'
				            			, 'gm.key'
										, 'gtp.id as primary_id'
										, 'gtp.translation as primary_message'
										, 'gts.id as secondary_id'
										, 'gts.translation as secondary_message'
									);

		return $rows->get();
	}

	public function updateOrCreate($message, $translatedMessage, Locale $locale, $module, $mode)
	{
		$model = $this->findById($message, $locale);

		if(! $model)
		{
			$translation = Sentence::makeTranslation($translatedMessage, $translatedMessage, $module, $mode);

			$translation->setId($message);

			$translation->setTranslation($translatedMessage);

			$model = $this->add($translation, $locale);			
		}
		else
		{
			$model->translation = $translatedMessage;

			$model->save();
		}

		return $model;		
	}

	public function findNextUntranslated(Locale $localePrimary = null, Locale $localeSecondary = null)
	{
		$db = $this->model->getConnection();

		$query = "select id 
					from glottos_messages 
					where id||'".$localeSecondary->getLanguage()."'||'".$localeSecondary->getCountry()."' 
					not in (select message_id||language_id||country_id from glottos_translations)";

		$rows = $db->select($db->raw($query));

		if($rows)
		{
			$model = $this->model
						->with('message')			
						->where('message_id', $rows[0]->id)
						->where('language_id', $localePrimary->getLanguage())
						->where('country_id', $localePrimary->getCountry())
						->first();
		}
		else
		{
			$model = null;
		}

		return $model;
	}
}
