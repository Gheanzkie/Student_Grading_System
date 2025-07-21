<?php

namespace Delacruz\Gs\Core;
use mysqli;
class Database{
    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'oop';
        $user = 'root';
        $pass = '';

        //my sql connection

        $this->conn = new \mysqli($host, $user, $pass, $db);
        if ($this->conn->connect_error) {
            die("Connection failed: ". $this->conn->connect_error);
        }
    }

}



?>