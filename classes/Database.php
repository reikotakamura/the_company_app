<?php

    class Database{
        private $server_name = "localhost"; //Better to use local host "name". 
        private $user_name = "root"; //default
        private $password = "root"; //default password for Mac 
        private $db_name = "the_company_october";  
        protected $conn; 

        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->user_name, $this->password, $this->db_name);
            if($this->conn->connect_error){
                die("Unable to connect to the database" .$this->conn->connect_error);
            }
        }

    }


    

?>

