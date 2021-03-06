<?php
class Product{

    // database connection and table name
    private $conn;
    private $table_name = "products";

    // object properties
    public $id;
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $date;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
?>
