<?php

class DBConnect {

    static private $_link;

    static public function connect($data) {
        if (! self::$_link) {
            self::$_link = mysqli_connect(
                $data['host'],
                $data['user'],
                $data['pwd'],
                $data['db']
            );
            if (! self::$_link) {
                return false;
            }
        }
        return self::$_link;
    }

    private function __construct() {
    }

}

$data = array(
    'host' => 'localhost',
    'user' => 'root', 
    'pwd' => '',
    'db' => '',
);

$con = DBConnect::connect($data);

var_dump($con);