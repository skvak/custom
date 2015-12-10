<?php 
include_once "books.php"; 
include_once "authors.php"; 
include_once "genres.php"; 
include_once "a_controller.php"; 

	class Index_books extends Controller {
		protected $_template = 'books.html';

    	function output() 
    	{
        	$books = new Books_model();
        	$this->_variables = $books->get_all();
        	include($this->_template);
    	}
	}

	class Index_authors extends Controller {
		protected $_template = 'authors.html';

    	function output() 
    	{
        	$authors = new Authors_model();
        	$this->_variables = $authors->get_all();
        	include($this->_template);
    	}
	}

	class Index_genres extends Controller {
		protected $_template = 'genres.html';

    	function output() 
    	{
        	$genres = new Genres_model();
        	$this->_variables = $genres->get_all();
        	include($this->_template);
    	}
	}

	$result = new Index_authors();
	$result->output();
