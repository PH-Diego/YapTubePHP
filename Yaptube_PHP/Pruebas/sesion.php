<?php

  class User {
    public $nombre_usuario;
    public $tipo_poder;

    function __construct(){
      $this->nombre_usuario=NULL;
      $this->tipo_poder=NULL;
      echo "New User <br>";
    }

    function setName($name){
      $this->nombre_usuario = $name;
    }
    function setPoder($poder){
      $this->tipo_poder = $poder;
    }

    function getName(){
      return $this->nombre_usuario;
    }
  }

/*
  class UserSession{
    public function __construct(){
      session_start();
    }

    public function setCurrentUser($user){
      $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
      return $_SESSION['user'];
    }

    public function closeSession(){
      session_unset();
      session_destroy();
    }
  }
*/
?>
