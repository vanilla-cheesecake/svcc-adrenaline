<?php

// This class has a constructor that establishes a connection to the database and a method to retrieve the connection object.

class DBConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "example_db";
    private $conn;
  
    public function __construct() {
      $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
  
      if(!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
  
    public function getConnection() {
      return $this->conn;
    }
  }
  
?>