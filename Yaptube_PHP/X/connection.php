<?php
class Connection
{
  private $driver='pgsql';
  private $host='localhost';
  private $user='postgres';
  private $pass='123456';
  private $dbname='yap!tube';

  protected function conexion()
  {
    try {
      $pdo=new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}",$this->user,$this->pass,);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }catch(PDOException $e){
      echo $e->getMessage();
    }
  }
}

 ?>
