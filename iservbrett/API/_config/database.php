<?php

class database  {

  // database variables
  private $host = "172.20.16.141/phpmyadmin";
  private $databse_name = "bbs_kleinanzeigen";
  private $username= "bbs-kleinanzeigen";
  private $password = "IT8";
  public $conn;

  // enable Connection
  public function getConnection() {
    $this->conn = null;
    try{
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
      $this->conn->exec("set names utf8");
      }
      catch(PDOException $exception){
        echo "Keine Verbindung zur Datenbank: " . $exception->getMessage();
      }
      return $this->conn;
      }
}
?>
