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
        <input type="password" name="pass" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Loguearse">
      </form>


    </main>

    <footer>
      <?php include "1footer.php"; ?>
    </footer>

  </body>
</html>
