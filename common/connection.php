<?php

Class Connection
{
private static $instance = null;
private $servername = "localhost";
private $username = "root";
private $password = "";
private $port = 4000;

private $conn;

private function __construct()
{
    try {
        $this->conn = new PDO("mysql:host=$this->servername;port=$this->port;dbname=app", $this->username, $this->password);
       // echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}

public static function getInstance()
{
    if(self::$instance == null)
    {
        self::$instance= new Connection();
    }

    return self::$instance;
}

public function getConnection()
{
    return $this->conn;
}


}