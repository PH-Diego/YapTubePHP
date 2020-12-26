<?php
  function suma(&$arg1, $arg2){
    $arg1+=$arg2;
  }

  $num1=5;
  $num2=10;
  suma($num1,$num2);
  echo 'El valor de $num1 es: ' .$num1;


 ?>
