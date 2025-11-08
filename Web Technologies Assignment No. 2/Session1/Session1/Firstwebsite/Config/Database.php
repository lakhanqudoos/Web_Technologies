<?php
    class Database{
        private $host = "localhost";
        private $db_name = "hr";
        private $username = "root";
        private $password = "";
        protected $conn;

        public function __construct()
        {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if(!$this->conn)
            {
                die('ERROR DATABASE CONNECTION...!');
            }
        }
    }
?>