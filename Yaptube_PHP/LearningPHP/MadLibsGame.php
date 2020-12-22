<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="MadLibsGame.php" method="get">
      Color: <input type="text" name="color"><br>
      Name: <input type="text" name="name"><br>
      Electronic Device: <input type="text" name="ed"><br>
      <input type="submit"><br>
    </form>

    <?php
      $color = $_GET["color"];
      $name = $_GET["name"];
      $ed = $_GET["ed"];

      echo "Roses are $color <br>and my name is $name <br>as the holy $ed<br>";
    ?>

  </body>
</html>
