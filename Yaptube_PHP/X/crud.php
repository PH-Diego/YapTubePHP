<?php
require_once 'connection.php';
abstract class Crud extends Connection
{
  //Variables
  private $table;
  private $pdo;

  //Métodos
  /* CONSTRUCTOR DE CRUD                                      *
   * $table: string con el nombre de la tabla que lee el crud */
  public function __construct($table)
  {
    $this->table=$table;
    $this->pdo=parent::conexion();
  }

  public function getAll()
  {
    try {
      $stm=$this->pdo->prepare("SELECT * FROM $this->table");
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function getById($id)
  {
    try {
      $stm=$this->pdo->prepare("SELECT * FROM public.$this->table WHERE id_cuenta=?");
      $stm->execute(array($id));
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function delete($id)
  {
    try {
      $stm=$this->pdo->prepare("DELETE FROM public.$this->table WHERE id_cuenta=?");
      $stm->execute(array($id));
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  abstract function create();
  abstract function update();
}

 ?>
