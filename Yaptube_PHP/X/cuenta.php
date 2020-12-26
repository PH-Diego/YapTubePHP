<?php
  require_once 'crud.php';
  class Cuenta extends Crud
  {
    private $id;
    private $name;
    private $pass;
    private $power;
    const TABLE='cuenta';
    private $pdo;
    public function __construct()
    {
      parent::__construct(self::TABLE);
      $this->pdo=parent::conexion();
    }

    public function __set($name,$value){
      $this->$name=$value;
    }
    public function __get($name){
      return $this->$name;
    }

    public function create(){
      $stm=$this->pdo->prepare("INSERT INTO public.".self::TABLE." (nombre_cuenta,  contrasena, tipo_poder) VALUES (?,?,?)");
      $stm->execute(array($this->name,$this->pass,$this->power));
    }
    public function update(){
      $stm=$this->pdo->prepare("UPDATE public.".self::TABLE." SET nombre_cuenta=?, contrasena=?, tipo_poder=? WHERE id_cuenta=?");
      $stm->execute(array($this->name,$this->pass,$this->power,$this->id));
    }
  }
 ?>
