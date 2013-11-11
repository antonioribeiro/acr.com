<?php
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

return array(

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
	| This option sets the default language and country used by Construe.
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
	| Cookie
	|--------------------------------------------------------------------------
	|
	| Configuration specific to the cookie component of Construe.
	|
	*/

	'cookie' => array(

		/*
		|--------------------------------------------------------------------------
		| Default Cookie Key
		|--------------------------------------------------------------------------
		|
		| This option allows you to specify the default cookie key used by Sentry.
		|
		| Supported: string
		|
		*/

		'key' => 'pragmarx_construe',

 	),

	/*
	|--------------------------------------------------------------------------
	| Messages
	|--------------------------------------------------------------------------
	|
	| Configuration specific to the messages management component of Construe.
	|
	*/

	'messages' => array(

		/*
		|--------------------------------------------------------------------------
		| Model
		|--------------------------------------------------------------------------
		|
		| When using the "eloquent" driver, we need to know which
		| Eloquent models should be used throughout Sentry.
		|
		*/

		'model' => 'PragmaRX\Construe\Messages\Eloquent\Messages',

	),

);
