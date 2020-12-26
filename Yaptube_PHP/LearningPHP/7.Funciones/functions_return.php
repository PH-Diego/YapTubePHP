<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        function cube_num($num=1) //num toma el valor 1 si no se le envía nada
        {
          return $num*$num*$num;
          echo "Hello"; //el return termina la ejecución de la función
        }
        echo cube_num(5);

        //Una función incluse puede devolver arreglos

        function operation($num1, $num2){
          return array($num1+$num2,$num1-$num2,$num1/$num2);
        }
        list($plus, $minus, $divideBy) = operation(15,5);
        echo "<br>La suma es: $plus, la resta es: $minus y la división: $divideBy.";
       ?>
  </body>
</html>
