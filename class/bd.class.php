<?php

    class bd {

        private $host = "localhost";
        private $db = "turimtest";
        private $user = "root";
        private $password = "";

        public $conn = null;

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        }
        
        public function __destruct() {
            mysqli_close($this->conn);
        }

    }