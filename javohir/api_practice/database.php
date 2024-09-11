<?php 

class Database {
    private $sql;
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("127.0.0.1", "root", "", "myitedu", "3307");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function sql($sql) { 
        $this->sql = $sql;
        return $this->response();
    }

    private function response() { 
        $result = $this->conn->query($this->sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct(){
        $this->conn->close();
    }
}