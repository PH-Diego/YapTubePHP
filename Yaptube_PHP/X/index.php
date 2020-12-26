<?php require_once 'cuenta.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yap!tube</title>
  </head>
  <body>
    <header>
      <h1>Yap!tube</h1>
    </header>

    <main>
      <?php
      $MyCuenta = new Cuenta('cuenta');
      print_r($MyCuenta->getAll());

      $MyCuenta->name='diego';
      $MyCuenta->pass='4321';
      $MyCuenta->power='1';
      //Crea registro de cuenta
      //$vista_cuenta->create();

      //Elimina registro de cuenta
      //$MyCuenta->delete(10000014);

      // Actualiza registro de cuenta
      $MyCuenta->id='10000015';
      $MyCuenta->power='3';
      $MyCuenta->update();
       ?>


    </main>

    <footer></footer>


  </body>
</html>
