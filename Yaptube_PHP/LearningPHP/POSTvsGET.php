<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
        El método post, se diferencia de get en que:
        - no muestra la info en la URL (por lo que es más seguro)
        - te permite obtener más info del usuario
    -->
    <form action="POSTvsGET.php" method="post">
      Password: <input type="password" name="password"> <br>
      <input type="submit">
    </form>

    <?php
      echo $_POST["password"];
     ?>

  </body>
</html>
