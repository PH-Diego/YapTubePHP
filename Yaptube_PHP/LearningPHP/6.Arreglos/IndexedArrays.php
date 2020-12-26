<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $friends = array("Kevin", "Karen", "Oscar", "Jim", 8); //can storage any type of value at same time
      echo "$friends<br>";
      echo $friends[0], "<br>";
      echo $friends[1], "<br>";
      echo $friends[2], "<br>";
      echo $friends[3], "<br>";
      echo $friends[4], "<br>";
      $friends[4] = "Raul";
      echo $friends[4], "<br>";
      echo count($friends), "<br>";
      $friends[5] = "Angela";
      echo $friends[5], "<br>";
      echo count($friends), "<br>";
     ?>
  </body>
</html>
