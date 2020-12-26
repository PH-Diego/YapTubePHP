<?php
  //se añade lo escrito en otro archivo
  require_once "Clases_atributos_metodos.php";

  //variables de instancia de clase
  $jose = new Persona();
  $carla = new Persona();

    // Modificación de dichas variables
    // (no modifican a la clase, sólo a la instancia)
    $jose->nombre='Jose';
    $jose->edad=15;
    $jose->rut='13246245';
    $carla->nombre='Carla';
    $carla->edad=19;
    $carla->rut='132451';

    $jose->corre();

  // Variables de clase
  // (Si se hace un cambio en una variable de clase,
  // dicho cambio se refleja en todas sus instancias)
  // El cambio se puede hacer sólo en variables estáticas
  Persona::$color='Azul';
  $jose->corre();
 ?>
