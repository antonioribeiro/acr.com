<?php namespace PragmaRX\Construe\Support;
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

class Sentence {

	/**
	 * Prefix
	 * 
	 * @var string
	 */
	public $prefix;

	/**
	 * Sentence
	 * 
	 * @var string
	 */
	public $sentence;

	/**
	 * Translated sentence
	 * 
	 * @var string
	 */
	public $translated;

	/**
	 * Sentence unique ID
	 * 
	 * @var string
	 */
	public $sentenceUID;

	/**
	 * Suffix
	 * 
	 * @var string
	 */
	public $suffix;

	/**
	 * Create a new sentence bag instance.
	 *
	 * @param  array  $sentences
	 * @return void
	 */
	public function __construct($prefix, $sentence, $suffix)
	{
		$this->prefix = $prefix;

		$this->sentence = $sentence;

		$this->suffix = $suffix;
	}

}
