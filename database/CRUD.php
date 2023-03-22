<?php

/*

This class has methods for creating, reading, updating, and deleting records from the database. 
Each method takes the necessary parameters, executes the appropriate SQL query, and returns a Boolean value indicating success or failure.


*/

class CRUD {
    private $conn;
  
    public function __construct($db) {
      $this->conn = $db;
    }
  
    public function create($data) {
      $sql = "INSERT INTO example_table (field1, field2, field3) VALUES ('$data[field1]', '$data[field2]', '$data[field3]')";
  
      if(mysqli_query($this->conn, $sql)) {
        return true;
      } else {
        return false;
      }
    }
  
    public function read($id = null) {
      $sql = "SELECT * FROM example_table";
  
      if($id) {
        $sql .= " WHERE id = $id";
      }
  
      $result = mysqli_query($this->conn, $sql);
  
      $rows = array();
  
      while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
  
      return $rows;
    }
  
    public function update($id, $data) {
      $sql = "UPDATE example_table SET field1='$data[field1]', field2='$data[field2]', field3='$data[field3]' WHERE id=$id";
  
      if(mysqli_query($this->conn, $sql)) {
        return true;
      } else {
        return false;
      }
    }
  
    public function delete($id) {
      $sql = "DELETE FROM example_table WHERE id=$id";
  
      if(mysqli_query($this->conn, $sql)) {
        return true;
      } else {
        return false;
      }
    }
  }
  



?>