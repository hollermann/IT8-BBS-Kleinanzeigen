<?php
class Category{

    // database connection and table name
    private $conn;
    private $table_name = "products";

    // object properties
    public $id;
    public $title;
    public $description;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>
