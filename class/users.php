<?php

class User{
    private $conn;

    private $db_table = 'students';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getUsers(){
        $sqlQuery = "SELECT id, CONCAT(first_name, ' ', last_name) as name, email, group_name FROM " . $this->db_table ." ";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }




}