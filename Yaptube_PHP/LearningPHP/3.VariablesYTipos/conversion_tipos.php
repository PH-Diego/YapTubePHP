<?php
  // PHP es un lenguaje débilmente tipado. El tipo se asigna por contexto

  //Conversión por contexto
  $var='hola';
  $age=12;
  $name='Diego';
  $isDog=true;
  $price=1233.9;
  echo gettype($var),"<br>"; //gettype() devuelve el tipo de dato
  echo gettype($age),"<br>"; //de una variable.
  echo gettype($name),"<br>";
  echo gettype($isDog),"<br>";
  echo gettype($price),"<br>";

  echo "<br><br>";

  //Conversión por (cast)
  $price = (int)$price;
  echo gettype($price),"<br>";
  echo var_dump($price),"<br>"; //también imprime el valor

  echo var_dump((bool)$name),"<br>"; //OJO si la var está vacía o es 0, devuelve false.
  echo gettype($name),"<br>";
  echo var_dump((int)$name),"<br>"; // no sé por qué esto devuelve 0

  echo "<br><br>";
  //Conversión por función
  $numero=19;
  $name = intval($name);
  echo var_dump($name),"<br>";
  $name = boolval($name);
  echo var_dump($name),"<br>";
  $numero = boolval($numero);
  echo var_dump($numero),"<br>";
  $age = strval($age);
  echo var_dump($age),"<br>";


 ?>
