<?php
  // https://www.php.net/manual/en/control-structures.foreach.php

  // Para arreglos indexados

  $arreglo= array('Gato', 'Perro', 'Panda');
  foreach ($arreglo as $animal) {
    echo "El animal es $animal <br>";
  }

  $asociativo=array('Nombre'=>'Marines', 'Apellido'=>'Méndez', 'Sexo'=>'Femenino');
  // Para arreglos asociativos
  foreach ($asociativo as $key => $value) {
    echo "La clave es $key y el valor es $value <br>";
  }
?>
