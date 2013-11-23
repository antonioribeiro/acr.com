<?php namespace PragmaRX\Glottos\Support;
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
	private $sentence;

	/**
	 * Translation sentence
	 * 
	 * @var string
	 */
	protected $translation;

	/**
	 * Translation was found?
	 * 
	 * @var boolean
	 */
	public $translationFound;

	/**
	 * Sentence unique ID
	 * 
	 * @var integer
	 */
	private $id;

	/**
	 * Sentence hash
	 * 
	 * @var string
	 */
	private $hash;

	/**
	 * Sentence module
	 * 
	 * @var string
	 */
	private $module = 0;

	/**
	 * Sentence Mode (natural or key)
	 * @var PragmaRX\Glottos\Support\Mode
	 */
	private $mode;

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
	public function __construct($sentence, $module = 0, Mode $mode, $config = null)
	{
		$this->module = $module;

		$this->mode = $mode;

		$this->config = $config;

		$this->setSentence($sentence);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getHash()
	{
		if ( ! $this->hash)
		{
			$this->hash = $this->calculateHash();
		}

		return $this->hash;
	}

	public function calculateHash()
	{
		return $this->hash = SHA1($this->getSentence().$this->getModule());
	}

	public function getModule()
	{
		return $this->module;
	}

	public function setModule($module)
	{
		if ($this->module !== $module) 
		{
			$this->module = $module;

			$this->calculateHash();
		}
	}

	public function getFullSentence()
	{
		return $this->getProperty('sentence', true);
	}

	public function getSentence($full = false)
	{
		return $this->getProperty('sentence', $full);
	}

	public function setSentence($sentence)
	{
		preg_match("/^(natural|key)::(.*)/", $sentence, $matches);

		if(count($matches) == 3)
		{
			$this->mode = new Mode($matches[1]);
			$sentence = $matches[2];
		}

		$this->sentence = $sentence;

		SentenceParser::parse($this->sentence, $this->prefix, $this->suffix, $this->config);

		$this->calculateHash();
	}

	public function getFullTranslation()
	{
		return $this->getProperty('translation', true);
	}

	public function getTranslation($full = false)
	{
		return $this->getProperty('translation', $full);
	}

	public function setTranslation($translation)
	{
		$this->translation = $translation;
	}

	public function getMode()
	{
		return $this->mode->get();
	}

	public function setMode($mode)
	{
		$this->mode->set($mode);
	}

	public function getProperty($property, $full)
	{
		return ($full ? $this->prefix : '') . $this->$property . ($full ? $this->suffix : '');
	}

	public static function make($message, $module, $mode)
	{
		return new Sentence($message, $module, $mode);
	}

	public static function makeTranslation($message, $translation, $module, $mode)
	{
		$sentence = new Sentence($message, $module, $mode);

		$sentence->translation = $translation;

		return $sentence;
	}

}