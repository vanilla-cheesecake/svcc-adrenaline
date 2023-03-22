<?php

class Professor {
    private $id;
    private $name;
    private $email;
    private $password;
    private $created_at;
    private $updated_at;
 
    public function __construct($id, $name, $email, $password, $created_at, $updated_at) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
 
    // Getters and Setters for private properties
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
 
    public function getName() {
        return $this->name;
    }
 
    public function setName($name) {
        $this->name = $name;
    }
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }
 
    public function getCreatedAt() {
        return $this->created_at;
    }
 
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }
 
    public function getUpdatedAt() {
        return $this->updated_at;
    }
 
    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }
}




?>