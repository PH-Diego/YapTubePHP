<?php
  //La fnción se maneja desde la variable

  $operation = function($num1=0,$num2=0){
    return $num1+$num2;
  }; //OJO con este ;

  //$operation(15,5); //La variable no guarda el valor.
  echo "El resultado de la operación es " .$operation(15,5);

 ?>
