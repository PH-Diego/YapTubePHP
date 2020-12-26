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
      } else if ($isMale == 5) {
        echo "WTF";
      } else if ($isMale && !$isTall) {
        echo "You are a short male";
      } else if (!$isMale && $isTall) {
        echo "You are tall, but not a male";
      } else {
        echo "You are not tall and not male";
      }
      /* También sirve
      if(expresión):
      else if(expresión):
      else:
      endif;
      */
     ?>
  </body>
</html>
