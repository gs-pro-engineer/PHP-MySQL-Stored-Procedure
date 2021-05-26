<?php

class temp 
{
    public function __construct() {
    
        $dbhost = "localhost";
        $username = "root";
        $password = "";
        $dataBase = "db";
    
        try{
            $this->connection = new mysqli($dbhost, $username, $password, $dataBase);
            if(mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");
            }
            $this->connection->set_charset("utf8");
        }catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}

?>