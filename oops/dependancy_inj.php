<?php
    class Database{
        private $con;
        public function __construct(){
            $this->con=$this->connect();
        }
        private function connect(){

            echo "Database connected<br>";
        }
        public function getData(){
            echo "Get data<br>";
        }
    }

    class User{
        private $db;
        public function __construct(Database $db){
            $this->db=$db;
        }

        public function getUser(){
            $this->db->getData();
        }
    }
    $database=new Database();
    $user=new User($database);
    $user->getUser();

?>