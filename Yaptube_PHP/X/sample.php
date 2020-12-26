<?php

  print_r(PDO::getAvailableDrivers());

  try{
    $myPDO = new PDO("pgsql:host=localhost;dbname=testdb","postgres","123456");
    echo "Connected to PostgreSQL with PDO";

  }catch(PDOException $e){
    echo $e->getMessage();
  }

 ?>
