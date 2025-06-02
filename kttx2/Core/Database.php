<?php
    class Database {
        protected $conn;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "hms";

        function __construct() {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                die();
            }
        }
    }
?>