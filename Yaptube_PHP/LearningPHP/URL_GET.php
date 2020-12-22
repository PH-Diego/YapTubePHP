<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="URL.php" method="get">
      Name: <input type="text" name="name"><br>
      <input type="submit">
    </form>
    <br><br>

    <?php
    /* Cuando usas $_GET["abc"], lo que estás haciendo es obtener un valor desde la URL de la página.      *
     * Esto implica que si cambias dicha URL "a mano", lo que obtienes de GET, cambiará de acuerdo a ello. *
     * Es decir, se puede almacenar información en la URL de cada página                                   */
      echo $_GET["age"]<br>; // Agrega esto a la URL de la página: &age=15
      echo $_GET["name"]<br>;
     ?>
  </body>
</html>
