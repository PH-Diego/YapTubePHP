<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $isMale = 5;
      $isTall = false;
      if ($isMale && $isTall){ //Funciona igual que en C y C++
        echo "You are a tall male";
      } elseif ($isMale == 5) {
        echo "WTF";
      } elseif ($isMale && !$isTall) {
        echo "You are a short male";
      } elseif (!$isMale && $isTall) {
        echo "You are tall, but not a male";
      } else {
        echo "You are not tall and not male";
      }
     ?>
  </body>
</html>
