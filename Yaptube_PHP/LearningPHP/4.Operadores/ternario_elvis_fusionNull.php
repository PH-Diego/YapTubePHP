 <?php
  //un operador ternario tiene tres operando y dos operadores.
  //(Expresion bool)?expresion:Expresion

  $age=15;

  echo $age, ($age>=18)?'Eres mayor de edad':'Eres menor de edad', "<br>";
  $age+=3;
  echo $age, ($age>=18)?'Eres mayor de edad':'Eres menor de edad', "<br>";

  //Operador Elvis (es binario)
  //(Expresion bool)?:Expresion
  $nombre=NULL;
  echo $nombre?:'No hay nombre', "<br>";

  //Operador de fusión NULL
  echo $nombre??'No hay nombre', "<br>";
  // Función NULL es mejor, porque puedes mandarle una variable vacía (o nueva)
  // y no te tira error.

  ?>
