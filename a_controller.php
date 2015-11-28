<?php

abstract class Controller {


	protected $_template;
	protected $_variables;

	function render()
	{ 
	  	foreach ($this->_variables as $key => $name) {
		   $result = str_replace($key, $name, $this->_template);
		}
	  
	  	return $result;
	}
	 
	abstract function output();

}