<?php
include_once "dbconnect.php";

abstract class Model {

	protected $_table;
	protected $_c;
	protected $_fields;

	function __construct(){
		$data = array(
			'host' => 'localhost',
		    'db' => 'test',
		    'user' => 'root',
		    'pwd' => '',
   		 );
		$this->_c = DBConnect::connect($data);

	}

	abstract function add_one($array);


	function get($query) {
	
	 	$result = mysqli_query($this->_c, $query);
     	$i = 0;
     
        while ($row = mysqli_fetch_assoc($result)) {
            foreach ($row as $key => $value) {
                $array[$key] = $value;
            }
            $result_array[$i] = $array;
            $i++;
        }
        return $result_array;
    }

    function get_all(){
        $query = "SELECT * FROM $this->_table";
        return $this->get($query);
    }
}