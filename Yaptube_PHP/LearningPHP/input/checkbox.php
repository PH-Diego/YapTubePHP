<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="checkbox.php" method="get">
      <!-- OJO con los [], en el valor de name -->
      Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
      <input type="submit">
    </form>

    <?php
      $fruits = $_GET["fruits"]; //recibe un arreglo
      echo $fruits[0], "<br>";
      echo $fruits[1], "<br>";
      echo $fruits[2], "<br>";
     ?>
  </body>
</html>
