<?php
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

return array(

	/*
	|--------------------------------------------------------------------------
	| Glottos translation mode
	|--------------------------------------------------------------------------
	|
	| Glottos can work your translations in two different modes:
	|
	|   Key: 
	|  
	|        All messages stored are keys to a message, for instance:
	|       
	|        For the message 'Main Menu' you key would be 'mainMenu'
	|
	|        To show the main menu, in any language, you'll do
	|
	|          {{ g('mainMenu') }}
	|
	|        - Pro: you won't risk having the same, but slightly different, message twice in the database
	|
	|        - Cons: you'll need to remember the key every time you write a message 
	|        -       you'll have to add translations for your keys including for your own language
	|
	|
	|   Natural: 
	|       
	|          Messages are stored in natural language, this is      
	|       
	|          The same Main Menu would be representeted simply as 
	|       
	|          {{ g('Main Menu') }}
	|           
	|          No need to add a key for it.
	|       
	|       
	|        - Pro: no need to add translations for your own language
	|               no need to remember the keys of your messages, just write it in natural language
    |
	|        - Cons: you might risk having the same, but slightly different, message twice in the database
    |
    |
    |  Overriding: 
    |             
    |            At any time you can override any of those modes by doing
	|        
    |           {{ g('key::mainMenu') }}  
    |             
    |           or
    |             
    |           {{ g('natural::Main Menu') }}  
    |             
	*/

	'mode' => 'natural',  /// or 'key'

	/*
	|--------------------------------------------------------------------------
	| Debug mode
	|--------------------------------------------------------------------------
	|
	| Turning debug on will make all translated messages become a bunch of characters. 
	|
	| Example of debug mode:
	|
	|                     menu: Home Blog Contact
	|       menu in debug mode: ---- Blog -------
	|
	|   In this example, we are still missing a translation for 'Blog'
	|
	*/

	'debug' => false,

	'debug_character' => '-',

	/*
	|--------------------------------------------------------------------------
	| Default Language and Country
	|--------------------------------------------------------------------------
	|
	| This option sets the default language and country used by Glottos.
	|
	|
	*/

	'default_language_id' => 'en',

	'default_country_id' => 'us',

	/*
	|--------------------------------------------------------------------------
	| Default Delimiters
	|--------------------------------------------------------------------------
	|
	| This option sets the default delimiters for variables inside messages.
	|
	|
	*/

	'variable_delimiter_prefix' => '|-',

	'variable_delimiter_suffix' => '-|',

	/*
	|--------------------------------------------------------------------------
	| Prefix and Suffix Delimiters
	|--------------------------------------------------------------------------
	|
	| This option sets the characters that should be ignored if prefixing or suffixing a sentence
	|
	|
	*/

	'prefix_suffix_delimiters'  => array( 
												"!"=>1,"\\"=>1,"\""=>1,"#"=>1,"\$"=>1,"%"=>1,"&"=>1,"'"=>1,"("=>1,")"=>1,"*"=>1,"+"=>1,","=>1,"-"=>1,"."=>1,"/"=>1,":"=>1,";"=>1,"<"=>1,"="=>1,">"=>1,"?"=>1,"@"=>1,"["=>1,"]"=>1,"^"=>1,"_"=>1,"`"=>1,"{"=>1,"|"=>1," "=>1,"}"=>1 
											),

	/*
	|--------------------------------------------------------------------------
	| Default Database Driver
	|--------------------------------------------------------------------------
	|
	| This option controls the database driver that will be utilized.
	|
	|
	*/

	'driver' => 'eloquent',

	/*
	|--------------------------------------------------------------------------
	| Models
	|--------------------------------------------------------------------------
	|
	| When using the "eloquent" driver, we need to know which Eloquent models 
	| should be used.
	|
	*/

	'message_model' => 'PragmaRX\Glottos\Repositories\Messages\Laravel\Message',

	'translation_model' => 'PragmaRX\Glottos\Repositories\Messages\Laravel\Translation',

	'language_model' => 'PragmaRX\Glottos\Repositories\Locales\Laravel\Language',

	'country_model' => 'PragmaRX\Glottos\Repositories\Locales\Laravel\Country',

	'country_language_model' => 'PragmaRX\Glottos\Repositories\Locales\Laravel\CountryLanguage',

);
