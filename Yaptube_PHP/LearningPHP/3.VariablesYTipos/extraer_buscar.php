<?php
  echo substr("Marines Méndez",8);
  //imprime desde la posición 8
  echo "<br>";
  echo substr("Marines Méndez Gallegos",8,7);
  // inprime 7 carácteres desde la posición 8. (tilde).
  echo "<br>";
  echo substr("Marines Méndez Gallegos",-8,7);
  echo "<br>";


  $myString='Bienvenido al mundo de la programción';
  $findme='programción';
  echo strpos($myString,$findme);
  //regresa la posición de la primera coincidencia.
  echo "<br>";
  echo strpos($myString,'a',12);
  // empieza a buscar a 1 desde la posición 11.



  echo "<br>";


 ?>
