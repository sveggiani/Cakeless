<?php
/**
 * Cakeless CakePHP plugin Component
 *
 */
class CakelessComponent extends Component {

  var $vars = array();

	/* Callbacks
	------------------------------------------------------------------------- */

	public function initialize( Controller $controller, $settings = array() ) {

		// imports LESSPHP Class (only for debug modes)
		if ( Configure::read('debug') > 0 ) {


		}
		
		App::import('Vendor', 'Cakeless.lessphp', array(
			'file' => 'lessphp' . DS . 'lessc.inc.php' )
		);
		
		$this->lessc = new lessc;			

	}

  public function addVars($array = array()) {
    $this->vars = array_merge($this->vars, $array);
  }
  
  private function hasVars() {
    if (count($this->vars)) {
      return true;
    }
    return false;
  }
	/* Methods
	------------------------------------------------------------------------- */

	/**
	 * Compiles a LESS syntax file and saves the compiled version
	 */
	public function compile($lessFile, $compiledFile) {

  	if ($this->hasVars()) {
	    $this->lessc->setVariables($this->vars);
	    $force = true;
  	}
		if (Configure::read('debug') > 0 or $force) {
			$compiled = $this->lessc->compileFile($lessFile);
			file_put_contents($compiledFile, $compiled);
		}

	}


}