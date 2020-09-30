<?php

    class db {

        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'site_prof_ribeiro';
    

        public function connect_mysql(){
            $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            mysqli_set_charset($connection, 'UTF8');

            if (mysqli_connect_errno()){
                echo 'Houve um erro ao tentar se conectar com o banco de dados mysql: '.mysqli_connect_error();
            }
    
            return $connection;
        }

    }

?>