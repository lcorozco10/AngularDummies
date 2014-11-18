<?php

/**
 * Info de la clase Class1
 */
class Class1 {
	// TODO - Insert your code here
	private $datos;
	/**
	 */
	function __construct($dato=NULL) {

		$this->datos = isset($dato)? $dato : 'default';
		// TODO - Insert your code here
	}

	public function getdato() {
		return $this->datos;
	}
}

?>