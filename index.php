<?php 
include_once "books.php"; 
include_once "a_controller.php"; 

	class Index extends Controller {
		function __construct(){
			$books = new Books_model();
			$this->_variables = $books->get_all();
			$this->_template = "index.html";
		}
	
		function output() {
			include($this->_template);
		}
	}

	$result = new Index();
	$result->output();
