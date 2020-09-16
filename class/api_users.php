<?php
include_once (__DIR__.'/../config/database.php');

class ApiUsers
{
    private $conn;
    private $db_table = 'api_user';

    private $username;
    private $password;

    public function __construct($apiUser, $connection)
    {
        $this->username = $apiUser['username'];
        $this->password = $apiUser['password'];
        $this->conn = $connection;
    }

    public function getApiUser(){
        $sqlQuery = "SELECT
                        username, 
                        password, 
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                       AND password = ?
                       AND authorized = 1
                    LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);


    }

}