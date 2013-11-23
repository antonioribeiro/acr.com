<?php namespace PragmaRX\Glottos\Repositories\Locales\Laravel;
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

use Illuminate\Database\Eloquent\Model as Eloquent;

class CountryLanguage extends Eloquent {

	protected $table = 'glottos_countries_languages';

	protected $guarded = array();

	public function language()
	{
		return $this->belongsTo('PragmaRX\Glottos\Repositories\Locales\Laravel\Language');
	}

	public function country()
	{
		return $this->belongsTo('PragmaRX\Glottos\Repositories\Locales\Laravel\Country');
	}

}