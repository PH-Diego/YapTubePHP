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

      <h2>Registro</h2>
      <form action="registro.php" method="post">
        <input type="text" name="nom" placeholder="Crea tu nombre de cuenta">
        <input type="password" name="pass" placeholder="Crea tu contraseña"> <br>
        <input type="radio" name="poder" value=1> Ciudadano <br>
        <input type="radio" name="poder" value=2> Villano <br>
        <input type="radio" name="poder" value=3> Héroe <br>
        <input type="submit" value="Registrarse">
      </form>
      <?php
        require 'conexion.php';

        $usuario = NULL;
        $clave = NULL;
        $poder = NULL;
        if (isset($_POST["nom"])){
          $usuario = $_POST["nom"];
        }
        if (isset($_POST["pass"])) {
          $clave = $_POST["pass"];
        }
        if (isset($_POST['poder'])) {
          $poder = $_POST['poder'];
        }
        if ($usuario!=NULL && $clave!=NULL && $poder !=NULL){
          $datos_cuenta = pg_query($conn, "SELECT nombre_cuenta, contrasena
	                                          FROM public.cuenta
                                            WHERE nombre_cuenta = '$usuario';");
          $existe_cuenta = pg_affected_rows($datos_cuenta);
          if($existe_cuenta == 0){
            $registro_cuenta = pg_query($conn, "INSERT INTO public.cuenta( nombre_cuenta, contrasena, tipo_poder)
            VALUES ('$usuario', '$clave', $poder);");

            if (!$registro_cuenta)
            {
              echo "El registro no ha podido efectuarse con las credenciales ingresadas.";
              exit;
            } else {
              header("Location: logueo.php");
            }
          } else {
            echo "<h3>Nombre de cuenta no disponible</h3>!";
          }
        }
        /*
        $result = pg_query($conn, "SELECT * FROM cuenta");
        if (!$result)
        {
          echo "Something went wrong.";
          exit;
        } else {
          $arr = pg_fetch_all($result);
          echo "<pre>";
          print_r($arr);
          echo "</pre>";
        }
        */
       ?>

    </main>

    <footer>
      <?php include "1footer.php"; ?>
    </footer>

  </body>
</html>
