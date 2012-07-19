<?php
/**
 * Cakeless CakePHP plugin Component
 *
 */
class CakelessComponent extends Component {


	/* Callbacks
	------------------------------------------------------------------------- */

	public function initialize( Controller $controller, $settings = array() ) {

		// imports LESSPHP Class (only for debug modes)
		if ( Configure::read('debug') > 0 ) {

			App::import('Vendor', 'Cakeless.lessphp', array(
				'file' => 'lessphp' . DS . 'lessc.inc.php' )
			);

		}

	}



	/* Methods
	------------------------------------------------------------------------- */

	/**
	 * Compiles a LESS syntax file and saves the compiled version
	 */
	public function compile( $lessFile, $compiledFile ) {

		if ( Configure::read('debug') > 0 ) {

			lessc::ccompile( $lessFile, $compiledFile );

		}

	}


}