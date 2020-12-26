<?php

$driver='pgsql';
$host='localhost';
$user='postgres';
$pass='123456';
$dbname='yap!tube';
try {
  $conn=new PDO("{$driver}:host={$host};dbname={$dbname}",$user,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $conn;
}catch(PDOException $e){
  echo $e->getMessage();
}

 ?>
