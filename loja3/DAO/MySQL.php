<?php
class MySQL extends PDO {
 private $host = "localhost"; 
 private $usuario = "root";
 private $senha = "";
 private $db = "tbclientes";

public function __construct()
{
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;

    return parent::__construct($dsn, $this->usuario, $this->senha);
    #php object
  

}



}

?>