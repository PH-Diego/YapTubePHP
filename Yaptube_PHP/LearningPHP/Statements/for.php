<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $luckyNumbers = array(4, 8, 15, 16, 23, 42);
      for( $i=0 ; $i<count($luckyNumbers) ; $i++ ){
        echo "$i $luckyNumbers[$i] <br>";
      }
     ?>
  </body>
</html>
