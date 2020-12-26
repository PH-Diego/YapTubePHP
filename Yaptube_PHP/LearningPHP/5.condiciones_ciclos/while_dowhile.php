<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $index = 1;
      // Primero chequea la condición y luego ejecuta el bloque de código
      while($index<=10){ //Be careful whit infinite loops
        echo "$index <br>";
        $index++;
      }
      echo "<br>";
      // Primero ejecuta el bloque de código y luego chequea la condición
      do{ //Be careful whit infinite loops
        echo "$index <br>";
        $index++;
      }while($index<=10)
     ?>

  </body>
</html>
