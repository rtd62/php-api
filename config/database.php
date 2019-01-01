<?php

class Database {
  // Specify database credentials
  private $host = "localhost";
  private $db_name = "api_db";
  private $username = "root";
  private $password = "";
  public $conn;

  // Get the database connection 
  public function getConnection(){
   $this->conn = null;

   try{
     $this->conn = new PDO("mysql:host=" . $this->host . ";dbname="
     $this->conn->exec("set names utf8");
   }catch(PDOException $exception){
     echo "Connection error: " . $exception->getMessage();
   }
   
   return $this->conn;

  }
}
