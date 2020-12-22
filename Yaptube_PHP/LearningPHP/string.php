<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $phrase = "Giraffe Academy";
      echo strtolower($phrase), "<br>"; //minúsculas
      echo strtoupper($phrase), "<br>"; //mayúsculas
      echo strlen($phrase), "<br>"; //cant. de letras
      echo $phrase[0], "<br>"; // letra en pos. index
      $phrase[0] = "B"; // modifica la letra del index
      echo $phrase, "<br>";

      echo str_replace("Biraffe", "Panda", $phrase), "<br>"; //replace a word of a String
      echo substr($phrase, 8, 3); //print 3 char elements since index 8


    ?>

  </body>
</html>
