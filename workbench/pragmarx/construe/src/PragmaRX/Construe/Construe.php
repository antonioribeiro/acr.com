<?php namespace PragmaRX\Construe;

/**
 * Part of the Construe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Construe
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

class Construe
{
	public $languages = array();
	public $messages = array();

	private $currentLanguageID;
	private $currentCountryID;
	private $did;

	private $language;

	function __construct() 
	{
		$this->loadLanguages();
		$this->loadMessages();
	}

	static function translate($messages, $module = 0, $replacements)
	{
		if (\Auth::check()) {
			$language = \Auth::user()->language_id;
			$country = \Auth::user()->country_id;
		} else {
			$language = \Session::get('languageID');
			$country = \Session::get('countryID');
		}

		$translator = \App::make('erobin.translator');
		$translated = $translator->translateMessages($messages, $language, $country, $module);

		foreach($replacements as $key => $string) {
			$translated = str_replace(static::variableDelimiterPrefix()."$key".static::variableDelimiterSuffix(), $string, $translated);
		}

		return ($translator->debug() ? '{' : '').$translated.($translator->debug() ? '}' : '');
	}

	public function translateMessages($messages, $languageID, $countryID, $module) {
		$this->removePrefixAndSuffix($messages, $prefix, $suffix);
		$m = explode(".", $messages);
		foreach($m as $key => $message) {
			$this->removePrefixAndSuffix($message, $messagePrefix, $messageSuffix); /// spaces and punctuation before and after should not be translated

			$m[$key] = $messagePrefix . $this->translateMessage($message, $languageID, $countryID, $module) . $messageSuffix;
		}
		$messages = $prefix . implode(".",$m) . $suffix;
		return $messages;
	}

	private function translateMessage($message, $languageID, $countryID, $module)
	{
		$this->setCurrentLanguage($languageID, $countryID);

		$hash = SHA1($message);
		$messageID = $this->buildMessageID($hash, $this->getDefaultLanguage(), $this->getDefaultCountry(), $module);
		$originalMessage = $this->getMessage($messageID);

		if (!isset($originalMessage) or empty($originalMessage)) {
			$this->newMessage($messageID, $this->getDefaultLanguage(), $this->getDefaultCountry(), $module, $hash, $message);
		}

		if (!$this->isDefaultLanguage($languageID, $countryID)) {
			$messageID = $this->buildMessageID($hash, $this->currentLanguageID, $this->currentCountryID, $module);
			$translatedMessage = $this->getMessage($messageID);
			if ( isset($translatedMessage) and !empty($translatedMessage) ) {
				return $translatedMessage;
			}
			\Log::warning("not found = $message - $hash - $messageID");
			$this->newMessage($messageID, $this->currentLanguageID, $this->currentCountryID, $module, $hash, $message);
		}

		return $message;
	}

	private function newMessage($messageID, $languageID, $countryID, $module, $hash, $message) {
		try 
		{
			$model = new \Message;
			$model->language_id = $languageID;
			$model->country_id = $countryID;
			$model->module_id = $module;
			$model->message_hash = $hash; // this hash is the untranslated form of the message
			$model->message = $message; // this is the message already translated
			$model->save();
			$result = $message;
		} 
		catch (\Exception $e) {
			dd($e);
		}
		$this->setMessage($messageID,$message);
	}
	
	private function isDefaultLanguage($lID, $cID) {
		return ($lID == $this->getDefaultLanguage()) and ($cID = $this->getDefaultCountry());
	}

	private function loadLanguages() {
		// $query = \DB::select("select cl.language_id, cl.country_id , l.name language_name , c.name country_name , concat(l.name,' (', c.name, ')') as regional_name, cl.enabled  from countries_languages cl  join languages l on l.id = cl.language_id  join countries c on c.id = cl.country_id;");
		
		// foreach ($query as $record) {
		// 		$this->languages[$record->language_id."-".$record->country_id] = array(
		// 																				  'language_id' => $record->language_id
		// 																				, 'country_id' => $record->country_id
		// 																				, 'language_name' => $record->language_name
		// 																				, 'country_name' => $record->country_name
		// 																				, 'regional_name' => $record->regional_name
		// 																				, 'enabled' => $record->enabled
		// 																		);
		// }
	}

	private function loadMessages() {
		$this->messages = array();    
		
		// $query = \DB::table('messages')->where('language_id', '=', $this->getDefaultLanguage())->where('country_id','=', $this->getDefaultCountry())->get();
		// foreach ($query as $record) {
		// 	$messageID = $this->buildMessageID($record->message_hash, $record->language_id, $record->country_id, $record->module_id);
		// 	$this->messages[$messageID] = $record->message;
		// }

		// $query = \DB::table('messages')->where('language_id', '=', $this->currentLanguageID)->where('country_id','=', $this->currentCountryID)->get();
		// foreach ($query as $record) {
		// 	$messageID = $this->buildMessageID($record->message_hash, $record->language_id, $record->country_id, $record->module_id);
		// 	$this->messages[$messageID] = $record->message;
		// }
	}

	private function removePrefixAndSuffix(&$message, &$prefix, &$suffix) {
		$prefix = '';
		$suffix = '';
		
		$chars = array( "!"=>1,"\\"=>1,"\""=>1,"#"=>1,"\$"=>1,"%"=>1,"&"=>1,"'"=>1,"("=>1,")"=>1,"*"=>1,"+"=>1,","=>1,"-"=>1,"."=>1,"/"=>1,":"=>1,";"=>1,"<"=>1,"="=>1,">"=>1,"?"=>1,"@"=>1,"["=>1,"]"=>1,"^"=>1,"_"=>1,"`"=>1,"{"=>1,"|"=>1," "=>1,"}"=>1 );

		$i = 0;
		while ($i < strlen($message) and isset($chars[$message[$i]])) {
			$prefix .= $message[$i];
			$i++;
		}
		$i = strlen($message)-1;
		while ($i > -1 and isset($chars[$message[$i]])) {
			$suffix = $message[$i] . $suffix;
			$i--;
		}

		if ($prefix != $this->variableDelimiterPrefix) {
			$message = substr($message,strlen($prefix));	
		} else {
			$prefix = '';
		}
		
		if ($suffix != $this->variableDelimiterSuffix) {
			$message = substr($message,0,strlen($message)-strlen($suffix));
		} else {
			$suffix = '';
		}
	}

	private function buildMessageID($hash, $languageID, $countryID, $module) {
		return SHA1("$hash, $languageID, $countryID, $module");
	}
	
	private function getMessage($messageID) {
		if (!isset($this->messages[$messageID])) {
			\Log::warning("not found! |$messageID|");
			if (!$this->did) {
				foreach($this->messages as $key => $data) {
					\Log::warning("$key => $data");
				}
				$this->did = true;  
			}
			foreach($this->messages as $key => $message) {
				if ($key == $messageID) {
					\Log::warning("FOUND! |$key| == |$messageID|");
				}
			}
		}

		return isset($this->messages[$messageID]) ? $this->messages[$messageID] : NULL;
	}
	
	private function setMessage($messageID,$message) {
		return $this->messages[$messageID] = $message;
	}

	private function getLanguages() {
		if(!isset($this->languages))  {
			$this->loadLanguages();
		}
		return $this->languages;
	}

	static function languages()
	{
		$translator = \App::make('erobin.translator');
		return $translator->getLanguages();
	}

	static function languageName($language_id, $country_id) {
		$translator = \App::make('erobin.translator');
		return $translator->languages[$language_id."-".$country_id]['regional_name'];
	}

	public function debug() {
		return \Config::get('app.debugTranslation');
	}

	private function getDefaultLanguage() {
		$l = \Config::get('app.defaultLanguage');
		if (!isset($l) or empty($l)) {
			$l = self::DEFAULT_LANGUAGE_ID;
		}
		return $l;
	}

	private function getDefaultCountry() {
		$c = \Config::get('app.defaultCountry');
		if (!isset($c) or empty($c)) {
			$c = self::DEFAULT_COUNTRY_ID;
		}
		return $c;
	}

	private function setCurrentLanguage($languageID, $countryID) {
		if (!isset($languageID)) {
			if (!isset($this->currentLanguageID)) {
				$languageID = $this->getDefaultLanguage();
			} else {
				$languageID = $this->currentLanguageID;
			}
		}

		if (!isset($countryID)) {
			if (!isset($this->currentCountryID)) {
				$countryID = $this->getDefaultCountry();
			} else {
				$countryID = $this->currentCountryID;
			}
		}

		if ($this->currentLanguageID != $languageID or $this->currentCountryID != $countryID) {
			$this->currentLanguageID = $languageID;
			$this->currentCountryID = $countryID;

			$this->loadMessages();
		}
	}

	static function variableDelimiterPrefix() {
		return \App::make('erobin.translator')->variableDelimiterPrefix;
	}

	static function variableDelimiterSuffix() {
		return \App::make('erobin.translator')->variableDelimiterSuffix;
	}
}
