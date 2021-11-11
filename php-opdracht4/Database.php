<?php

Class Database {
    
    private $host = "localhost";
    private $dbName = "scheldwoorden";
    private $userName = "root";
    private $passWord = "admin";
    public $connection;

    public function __construct() {
        $this->getConnection();
    }

    public function getConnection() {
        $this->connection = new mysqli($this->host, $this->userName, $this->passWord, $this->dbName);
    }
}


$db = new Database;
