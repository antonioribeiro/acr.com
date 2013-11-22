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
	protected $sentences = array();

	/**
	 * Paragraph prefix
	 * 
	 * @var string
	 */
	protected $prefix;

	/**
	 * Paragraph suffix
	 * 
	 * @var string
	 */
	protected $suffix;

	/**
	 * Delimiters for prefixes and suffixes
	 * 
	 * @var array
	 */
	protected $prefixSuffixDelimiters = array( 
												"!"=>1,"\\"=>1,"\""=>1,"#"=>1,"\$"=>1,"%"=>1,"&"=>1,"'"=>1,"("=>1,")"=>1,"*"=>1,"+"=>1,","=>1,"-"=>1,"."=>1,"/"=>1,":"=>1,";"=>1,"<"=>1,"="=>1,">"=>1,"?"=>1,"@"=>1,"["=>1,"]"=>1,"^"=>1,"_"=>1,"`"=>1,"{"=>1,"|"=>1," "=>1,"}"=>1 
											);

	/**
	 * Variable demimiter - prefix
	 * 
	 * @var string
	 */
	protected $variableDelimiterPrefix = '[-';

	/**
	 * Variable demimiter - suffix
	 * 
	 * @var string
	 */
	protected $variableDelimiterSuffix = '-]';

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
	public function parseParagraph($sentences, $module = 0)
	{
		$this->clear();

		if($sentences)
		{
			if (is_string($sentences))
			{
				$sentences = $this->removePrefixAndSuffix($sentences);

				$sentences = explode($this->delimiter, $sentences);
			}

			foreach($sentences as $key => $sentence)
			{
				$this->add( $this->parseSentence($sentence, $module) );
			}
		}
	}

	public function removePrefixAndSuffix($sentences)
	{
		$sentences = $this->parseSentence($sentences);

		$this->prefix = $sentences->prefix;

		$this->suffix = $sentences->suffix;

		return $sentences->getSentence();
	}

	/**
	 * Parse a sentence by removing prefixes and suffixes from it
	 * 
	 * @param  string $sentence
	 * @return array
	 */
	private function parseSentence($sentence, $module = null)
	{
		$prefix = '';
		$suffix = '';

		/// This is old and should be done using Regex now, anyone apply? :)

		$i = 0;
		while ($i < strlen($sentence) and isset($this->config->get('prefix_suffix_delimiters')[$sentence[$i]])) {
			$prefix .= $sentence[$i];
			$i++;
		}

		$i = strlen($sentence)-1;
		while ($i > -1 and isset($this->config->get('prefix_suffix_delimiters')[$sentence[$i]])) {
			$suffix = $sentence[$i] . $suffix;
			$i--;
		}

		if ($prefix != $this->variableDelimiterPrefix) {
			$sentence = substr($sentence,strlen($prefix));	
		} else {
			$prefix = '';
		}
		
		if ($suffix != $this->variableDelimiterSuffix) {
			$sentence = substr($sentence,0,strlen($sentence)-strlen($suffix));
		} else {
			$suffix = '';
		}

		return new Sentence($sentence, $prefix, $suffix, $module, new Mode($this->config->get('mode')));
	}

	/**
	 * Clear the sentences bag
	 * 
	 * @return void
	 */
	public function clear()
	{
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
	 * Get the default main prefix.
	 *
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}

	/**
	 * Get the default main prefix.
	 *
	 * @return string
	 */
	public function getSuffix()
	{
		return $this->suffix;
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
		$sentences = $this->joinSentences('sentence');

		return $this->prefix . $sentences . $this->suffix;
	}

	/**
	 * Join the sentences back in its paragraph form
	 * 
	 * @return string
	 */
	public function getTranslatedParagraph()	
	{
		$sentences = $this->joinSentences('translation');

		return $this->prefix . $sentences . $this->suffix;
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
			$sentences[] = $sentence->prefix . $sentence->getProperty($property) . $sentence->suffix;
		}

		return implode($this->getDelimiter(), $sentences);
	}
}