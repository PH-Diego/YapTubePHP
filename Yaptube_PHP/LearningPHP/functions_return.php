<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        function cube_num($num)
        {
          return $num*$num*$num;
          echo "Hello"; //el return termina la ejecución de la función
        }

        echo cube_num(5);
       ?>
  </body>
</html>
