<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="AssociativeArrays.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>

    <?php
      /* Un arreglo asociativo es una clase especial de arreglo, en la cual    *
       * no solo guardamos "data values", sino que también "key valur pairs".  *
       * En un arreglo asociativo, puedo almacenar varios key value pairs, que *
       * me permitirán acceder a la información de forma distinta.             */

       $grades=array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
       echo $grades[$_POST["student"]];
       /*
       $grades["Jim"]="F";
       echo $grades["Jim"], "<br>";
       echo $grades["Pam"], "<br>";
       echo $grades["Oscar"], "<br>";
       */

     ?>
  </body>
</html>
