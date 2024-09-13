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
?>

<?php

    class database
    {
        public $con;
        public $error;

        public function __construct($dbname='myitedu')
        {
            mysqli_report(MYSQLI_REPORT_STRICT);
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            try {
                $this->con = new \mysqli($servername, $username, $password, $dbname);
            }catch(\Database\Exception $e) {
                $this->error = $e->getMessage();
            }

        }

        protected function connect()
        {
            if(!$this->con){
                return false;
            }
            if ($this->con->connect_error) {
                $this->error = "Connection failed: " . $this->con->connect_error;
            }
            return $this->con;
        }

        public function sql($sql)
        {
           if (!$this->connect()){
               return [
                   'error' => true,
                   'message' => $this->error
               ];
           }
            $con = $this->connect();
            $result = $con->query($sql);
            if(!isset($result->num_rows)){
                return [];
            }
            if ($result->num_rows == 0) {
                $result = null;
                return [];
            }
            $output = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $output[] = $row;
                }
            }
            return $output;
        }

        public function __destruct()
        {
            if(isset($this->conn)) {
                $this->conn->close();
            }
        }
    }
    //$db = new database();
>>>>>>> 6dd73cfdf211dc8b67f22e6d81724263f030712a
