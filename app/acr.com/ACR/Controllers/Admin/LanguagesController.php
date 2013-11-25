<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\BaseController;
use \Glottos;
use \View;
use \Session;
use \URL;
use \Input;
use \Redirect;

class LanguagesController extends BaseController {

	public function index($filter = null)
	{
		switch ($filter) {
			case 'enabled':
				$languages = Glottos::getEnabledLanguages();
				$filtered = 'enabled';
				break;

			case 'disabled':
				$languages = Glottos::getDisabledLanguages();
				$filtered = 'disabled';
				break;
			
			default:
				$languages = Glottos::getAllLanguages();
				$filtered = 'all';
				break;
		}

		return View::make('admin.pages.index')
					->with('languages', $languages)
					->with('filtered', $filtered);
	}

	public function enableLanguage($id)
	{
		return $this->enableDisableLanguage($id, true);
	}

	public function disableLanguage($id)
	{
		return $this->enableDisableLanguage($id, false);
	}

	public function enableDisableLanguage($id, $enable)
	{
		Glottos::enableDisableLanguage($id, $enable);

		return Redirect::back();
	}

	public function stats()
	{
		$languages = Glottos::getEnabledLanguages();

		$stats = Glottos::getLanguageStats();

		return View::make('admin.pages.stats')
					->with('stats', $stats[0])
					->with('languages', $languages);
	}

	public function show($localeSecondary, $localePrimary = null)
	{
		$localePrimary = Session::get('glottos.primary.language') ?: Glottos::getDefaultLocale();

		$messages = Glottos::getTranslations($localePrimary, $localeSecondary);

		$localePrimary = Glottos::findLocale($localePrimary);
		$localeSecondary = Glottos::findLocale($localeSecondary);

		return View::make('admin.pages.translatedMessages')
					->with('localePrimary', $localePrimary)
					->with('localeSecondary', $localeSecondary)
					->with('messages', $messages);
	}

	public function edit($message, $localePrimary, $localeSecondary)
	{
		$primaryMessage = Glottos::findTranslationById($message, $localePrimary);
		$secondaryMessage = Glottos::findTranslationById($message, $localeSecondary);

		$localePrimary = Glottos::findLocale($localePrimary);
		$localeSecondary = Glottos::findLocale($localeSecondary);

        $formAction = URL::route('admin.translation.store', [
                                                            $message, 
                                                            $localePrimary->language_id.'-'.$localePrimary->country_id, 
                                                            $localeSecondary->language_id.'-'.$localeSecondary->country_id
                                                        ]);

		return View::make('admin.pages.translate')
					->with('formAction', $formAction)
					->with('localePrimary', $localePrimary)
					->with('localeSecondary', $localeSecondary)
					->with('primaryMessage', $primaryMessage)
					->with('secondaryMessage', $secondaryMessage);		
	}

	public function store($message, $localePrimary, $localeSecondary)
	{
		$primaryMessage = Glottos::findTranslationById($message, $localePrimary);
		$secondaryMessage = Glottos::findTranslationById($message, $localeSecondary);

		if (Input::get('message'))
		{
			Glottos::updateOrCreateTranslation($message, Input::get('message'), $localeSecondary);

			$type = 'success';
			$message = 'Translation was saved';
		}
		else
		{
			$type = 'danger';
			$message = 'Translation cannot be blank';
		}

		return Redirect::back()->with($type, $message);
	}

}