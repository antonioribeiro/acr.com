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

use PragmaRX\Glottos\Support\Sentence;
use PragmaRX\Glottos\Support\Mode;
use Countable;

class SentenceBag implements Countable {

	/**
	 * All of the registered sentences.
	 *
	 * @var array
	 */
	private $sentences = array();

	private $prefix;

	private $suffix;

	private $delimiter;

	private $config;

	/**
	 * Create a new sentence bag instance.
	 *
	 * @param  array  $sentences
	 * @return void
	 */
	public function __construct(Config $config, $paragraph = null, $delimiter = '.', $module = 0)
	{
		$this->delimiter = $delimiter;

		$this->config = $config;

		$this->parseParagraph($paragraph, $module);
	}

	/**
	 * Parse a string or array to get our sentences
	 * 
	 * @param  string/array $sentences
	 * @return void
	 */
	public function parseParagraph($paragraph, $module = 0)
	{
		$this->clear();

		if(! empty($paragraph))
		{
			if (is_string($paragraph))
			{
				$paragraph = $this->explodeParagraph($paragraph);
			}

			foreach($paragraph as $key => $sentence)
			{
				$this->add( $this->parseSentence($sentence, $module) );
			}
		}
	}

	private function explodeParagraph($paragraph)
	{
		$paragraph = $this->parseRemovePrefixAndSuffix($paragraph);

		return explode($this->delimiter, $paragraph);
	}

	private function parseRemovePrefixAndSuffix($paragraph)
	{
		SentenceParser::parse($paragraph, $this->prefix, $this->suffix, $this->config);

		return $paragraph;
	}

	/**
	 * Transform a message into a sentence
	 * 
	 * @param  string $sentence
	 * @return array
	 */
	private function parseSentence($sentence, $module = null)
	{
		return new Sentence($sentence, $module, new Mode($this->config->get('mode')), $this->config);
	}

	/**
	 * Clear the sentences bag
	 * 
	 * @return void
	 */
	public function clear()
	{
		$this->prefix = '';

		$this->suffix = '';

		$this->sentences = array();
	}

	/**
	 * Add a sentence to the bag
	 *
	 * @param  string  $sentence
	 * @return string
	 */
	public function add($sentence)
	{
		return $this->sentences[] = $sentence;
	}

	/**
	 * Get a particular sentence from the bag
	 *
	 * @param  string  $key
	 * @return string
	 */
	public function get($key)
	{
		if (array_key_exists($key, $this->sentences))
		{
			return $this->sentences[$key];
		}

		return '';
	}

	/**
	 * Replace a particular sentence
	 *
	 * @param  string  $key
	 * @return string
	 */
	public function put($key, $sentence)
	{
		if (array_key_exists($key, $this->sentences))
		{
			$sentence = $this->parseSentence($sentence);

			$this->sentences[$key] = $sentence;
		}
	}

	/**
	 * Get all of the sentences from the bag.
	 *
	 * @param  string  $format
	 * @return array
	 */
	public function all()
	{
		return $this->sentences;
	}

	/**
	 * Get the sentences for the instance.
	 *
	 * @return \PragmaRX\Support\SentenceBag
	 */
	public function getSentenceBag()
	{
		return $this;
	}

	/**
	 * Get the default sentence delimiter.
	 *
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
	}

	/**
	 * Set the default sentence delimiter.
	 *
	 * @param  string  $delimiter
	 * @return \PragmaRX\Support\SentenceBag
	 */
	public function setDelimiter($delimiter)
	{
		$this->delimiter = $delimiter;

		return $this;
	}

	/**
	 * Determine if the sentence bag has any sentences.
	 *
	 * @return bool
	 */
	public function isEmpty()
	{
		return ! $this->any();
	}

	/**
	 * Determine if the sentence bag has any sentences.
	 *
	 * @return bool
	 */
	public function any()
	{
		return $this->count() > 0;
	}

	/**
	 * Get the number of sentences in the container.
	 *
	 * @return int
	 */
	public function count()
	{
		return count($this->sentences);
	}

	/**
	 * Join the sentences back in its paragraph form
	 * 
	 * @return string
	 */
	public function getParagraph()	
	{
		return $this->joinSentences('sentence');
	}

	/**
	 * Join the sentences back in its paragraph form
	 * 
	 * @return string
	 */
	public function getTranslatedParagraph()	
	{
		return $this->joinSentences('translation');
	}

	/**
	 * Join the array of sentences into a string of sentences
	 * 
	 * @return string
	 */
	public function joinSentences($property = 'sentence')
	{
		$sentences = array();

		foreach($this->sentences as $key => $sentence)
		{
				echo "|".$sentence->getSentence()."|<br>";
				echo "|".$sentence->getTranslation()."|<br>";

			$sentences[] = $sentence->getProperty($property);
		}

		return $this->prefix . implode($this->getDelimiter(), $sentences) . $this->suffix;
	}
}