<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo -40, "<br>"; //integer
      echo 30.5, "<br>"; //float
      echo 5+9, "<br>";
      echo 5-9, "<br>";
      echo 5/9, "<br>";
      echo 5*9, "<br>";
      echo 10%3, "<br>"; //módulo, devuelve el resto de una división.

      $num = 10;
      echo $num, "<br>";
      $num++;
      echo $num, "<br>";
      $num += 25;
      echo $num, "<br>";

      echo abs(-100), "<br>"; // valor absoluto
      echo pow(2,4), "<br>"; // 2^4
      echo sqrt(144), "<br>"; // raíz cuadrada
      echo max(2,10), "<br>"; // Qué num es más grande
      echo min(2,10), "<br>"; // Qué num es más pequeño
      echo round(3.2), "<br>"; //redondea
      echo ceil(3.3), "<br>"; //redondea hacia arriba
      echo floor(3.8), "<br>"; //redondea hacia abajo

     ?>


  </body>
</html>
