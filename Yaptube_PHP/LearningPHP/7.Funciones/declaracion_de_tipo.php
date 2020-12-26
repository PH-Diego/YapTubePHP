<?php

  declare(strict_types=1); //hace que se puedan filtrar entradas y salidas de funciones.
  function validate(int $age):string{ //La función debe recibir un entero y devolver un string
    if($age>=18){
      return 'Puedes ver la pelicula';
      //return 10;
    } else {
      return 'No puedes ver la película';
    }
  }

  echo validate(18);
  //echo validate('18');
 ?>
