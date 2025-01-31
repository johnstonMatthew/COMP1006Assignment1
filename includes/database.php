<?php

class Database {
    protected $connection;

    private $host = 'localhost';
    private $username = 'root';
    private $password = 'mysql';
    private $database = 'comp1006database'; 

    public function __construct() {
        if (!isset($this->connection) ){
            $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

            if (!$this->connection){
                echo "<p> Cannot Connect to the Database </p>";
                exit();
            }
        }
        return $this->connection;
    }
}

$database = new Database();

?>