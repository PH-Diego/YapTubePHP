<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yap!tube</title>
  </head>
  <body style="background-color:lightblue">
    <header>
      <?php include "HVF/header.php" ?>
      <?php include "HVF/navbar.php" ?>
    </header>

    <main>
      <?php require "Formularios/register_login_form.php" ?>
      <?php

      $reg_log = $_POST['reg_log'] ?? 'no registrado';

      if ($reg_log == 'register'):
        header("Location: register.php");
      elseif ($reg_log == 'login'):
        header("Location: login.php");
      endif;

       ?>


    </main>

    <footer>
      <?php include "HVF/footer.php"  ?>
    </footer>

  </body>
</html>
