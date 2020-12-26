<?php

class DB{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;

    public function __construct(){
        $this->host     = '127.0.0.1';
        $this->port     = '5432';
        $this->user     = 'postgres';
        $this->dbname   = "yap!tube";
        $this->password = "123456";

    }

    function connect(){

        try{
/*
            $connection = new PDO("pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname . ";" $this->user , $this->password);
            return $connection;
*/
            $connection = "pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db;
            $pdo = new PDO($connection, $this->user, $this->password);

            return $pdo;

        }catch(PDOException $error){
            die('El error de conexión es: ' . $error->getMessage());
        }
    }
}






?>
