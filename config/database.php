<?php
class Database{
    private $connection;
    public function getConnection(){
        $this->connection = null;
        try{
            $this->connection = new mysqli(hostname: "localhost", username: "root", password: '', database: "db_webtopup");

            if($this->connection->connect_error){
                die("Connection failed: " . $this->connection->connect_error);
            }

            $this->connection->set_charset("utf8");
            return $this->connection;
        }catch(Exception $e){
            echo 'Connection failed : '.$e->getMessage();
        }
    }
}