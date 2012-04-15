<?php
/**
 * Cakeless CakePHP plugin Component
 *
 */
class CakelessComponent extends Object {


	/* Callbacks
	------------------------------------------------------------------------------------------- */

	function initialize( &$controller, $settings = array() ) {

		$this->controller =& $controller;

		// saving the controller reference for later use
		$this->controller =& $controller;


		// imports LESSPHP Class (only for debug modes)
		if ( Configure::read('debug') > 0 ) {

			App::import('Vendor', 'Cakeless.lessphp', array('file' => 'lessc.inc.php') );

		}


	}



	/* Methods
	------------------------------------------------------------------------------------------- */

	/**
	 * Compiles a LESS syntax file and saves the compiled version
	 */
	function compile( $lessFile, $compiledFile ) {

		if ( Configure::read('debug') > 0 ) {

			lessc::ccompile( $lessFile, $compiledFile );

		}

	}


}