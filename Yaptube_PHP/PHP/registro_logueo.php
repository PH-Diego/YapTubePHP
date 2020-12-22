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
      <form action="registro_logueo.php" method="post">
        <!-- OJO con los [], en el valor de name -->
        Regístrate: <input type="radio" name="reg_log" value="reg"><br>
        Loguéate: <input type="radio" name="reg_log" value="log"><br>
        <input type="submit">
      </form>

      <?php

        $reg_log = "registro_logueo";
        if(isset($_POST["reg_log"])){
          $reg_log = $_POST["reg_log"];
          echo $reg_log, "<br>";
        }
        if ($reg_log == "reg"){
          header("Location: registro.php");
        } elseif ($reg_log == "log") {
          header("Location: logueo.php");
        }
        $_POST = array();
       ?>

<!--
      <span>
        <div><h2><b>Registro:</h2></b></div>
        <div>Usuario: <input type="text" name="usrR"/></div>
        <div>Contraseña: <input type="password name="passR" /></div>
        <div><input type="submit" /></div>
      </span>
      <span>
        <div><h2><b>Logueo:</h2></b></div>
        <div>Usuario: <input type="text" /></div>
        <div>Contraseña: <input type="password" /></div>
        <div><input type="submit" /></div>
      </span>
-->
    </main>

    <footer>
      <?php include "1footer.php"; ?>
    </footer>

  </body>
</html>
