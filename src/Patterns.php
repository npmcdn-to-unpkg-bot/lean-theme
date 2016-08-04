<?php namespace LeanNs;

use Timber\Timber;

/**
 * Class for working with twig templates from patternlab.
 */
class Patterns {
	/**
	 * Init.
	 */
	public static function init() {
		$timber = new \Timber\Timber();

		Timber::$dirname = [ 'patterns/source/_patterns', 'patterns/patternlab-starterkit-twig/dist/_patterns' ];
	}
}
