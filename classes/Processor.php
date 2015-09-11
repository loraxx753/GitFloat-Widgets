<?php
/**
 * DESCRIPTION OF WHAT EXACTLY YOUR WIDGET DOES 
 * 
 * @package   GitFloat
 * @version   NUMBA
 * @author    YOUR NAME
 */

namespace Loraxx753\Test_Widget;

/**
 * Processes the commit audit request
 */
class Processor extends \GitFloat\Base_Processor {

	/**
	 * Constructs the proccessor.
	 */
	function __construct() {
		// Examples 
		// $this->use_github();
		// $this->use_twig();

	}

	/**
	 * Runs the widget and presents results
	 */
	public function run($arg1, $arg2, $optionalArg = false) {

		return $this->twig->render('output.twig', 
							array(
								'argument1'        => $arg1,
								'argument2'        => $arg2,
								'optionalArgument' => $optionalArg
								));
	}

}