<?php
class User{

    // database connection and table name
    private $conn;
    private $table_name = "user";

    // object properties
    public $id;
    public $name;
    public $date;
    public $rigths;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>
