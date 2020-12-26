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
      <?php require "Formularios/login_form.php" ?>


      <?php
        require_once 'Connection/connection.php';

        $usuario=$_POST['userName'] ?? 'NULL';
        $clave=$_POST['password'] ?? 'NULL';

        if ($usuario!=NULL && $clave!=NULL){
          $datos_cuenta = pg_query($conn, "SELECT nombre_cuenta, contrasena
	                                          FROM public.cuenta
                                            WHERE nombre_cuenta = '$usuario' AND contrasena = '$clave';");
          $existe_cuenta = pg_affected_rows($datos_cuenta);
          if ($existe_cuenta >= 1)
          {

            //$curr_user->setName($usuario);
            echo "El logueo ha sido exitoso.";
            exit;
          } else {
            echo "<br>error";
          }
        }
        ?>



    </main>

    <footer>
      <?php include "HVF/footer.php"  ?>
    </footer>

  </body>
</html>
