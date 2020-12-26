<?php
include 'db.php';

class User extends DB{
    private $username;
    private $poder;


    public function userExists($user, $pass){
      $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM public.cuenta WHERE nombre_cuenta = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM public.cuenta WHERE nombre_cuenta = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
          $this->usename = $currentUser['username'];
          $this->poder = $currentUser['poder'];
        }
    }

    public function getUsername(){
        return $this->username;
    }
    public function getPoder(){
        return $this->poder;
    }
}

?>
