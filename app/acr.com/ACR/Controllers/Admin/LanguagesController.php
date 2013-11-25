<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\BaseController;
use \Glottos;
use \View;
use \Session;

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

		$languagePrimary = Glottos::findLocale($localePrimary);
		$languageSecondary = Glottos::findLocale($localeSecondary);

		$messages = Glottos::getTranslations($localePrimary, $localeSecondary);

		return View::make('admin.pages.translatedMessages')
					->with('languagePrimary', $languagePrimary)
					->with('languageSecondary', $languageSecondary)
					->with('messages', $messages);
	}
}