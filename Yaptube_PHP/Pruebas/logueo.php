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
      <h2> Logueo </h2>

      <form action="logueo.php" method="post">
        <input type="text" name="nom" placeholder="Ingresa tu id de cuenta">
        <input type="pass" name="pass" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Loguearse">
      </form>

      <?php
        require 'conexion.php';
        require_once 'usuario.php';

        $usuario = NULL;
        $clave = NULL;
        $existe_cuenta = NULL;
        if (isset($_POST["nom"])){
          $usuario = $_POST["nom"];
        }
        if (isset($_POST["pass"])) {
          $clave = $_POST["pass"];
        }
        if ($usuario!=NULL && $clave!=NULL){
          $datos_cuenta = pg_query($conn, "SELECT nombre_cuenta, contrasena
	                                          FROM public.cuenta
                                            WHERE nombre_cuenta = '$usuario' AND contrasena = '$clave';");
          $existe_cuenta = pg_affected_rows($datos_cuenta);
          if ($existe_cuenta == 1)
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
      <?php include "1footer.php"; ?>
    </footer>

  </body>
</html>
