<?php
  require 'database.php';

  $message = '';

  if (!empty($_POST['nom']) && !empty($_POST['password'])){
    $sql = "INSERT INTO public.cuenta( nom, password, id_cuenta) VALUES ('dieasdfgo','hola', DEFAULT)";
    //$sql = "INSERT INTO cuenta (nom, password) VALUES (:nom, :password)";
    $stmt =$conn->prepare($sql);
    $stmt->bindParam('nom',$_POST['nom']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam('password',$password);

    if ($stmt->execute()) {
      $message = 'Cuenta creada satisfactoriamente';
    } else {
      $message = 'Ha ocurrido un error creando su contraseña';
    }
  }
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yap!tube</title>
  </head>
  <body style="background-color:lightblue">

    <header>
      <?php include "1header.php"; ?>
    </header>

    <main>

      <?php if (!empty($message)): ?>
          <p><?php $message ?></p>
      <?php endif; ?>

      <h2>Registro</h2>
      <form action="registro.php" method="post">
        <input type="text" name="nom" placeholder="Crea tu nombre de cuenta">
        <input type="password" name="pass" placeholder="Crea tu contraseña">
        <input type="submit" value="Registrarse">
      </form>

    </main>

    <footer>
      <?php include "1footer.php"; ?>
    </footer>

  </body>
</html>

<!--

-->
