<?php 
    class db {
        public $conn;
        protected $serverName = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $dbName = "lv_group";
        function __construct(){
            $this->conn = mysqli_connect($this->serverName,$this->userName,$this->passWord,$this->dbName);
        }
    }
?> 