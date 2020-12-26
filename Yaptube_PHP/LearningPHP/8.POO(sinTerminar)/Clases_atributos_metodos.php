<?php
// Ua clase representa a un tipo de entidad, la cual denro del programa luego se
// usará como un tipo de dato.

class Persona{
  //variables
  public $nombre; // public permite que acceda a los atributos de un objeto
  public $edad;   // desde cualquier parte del código sólo con instancia->
  public $rut;    // No es necesario usar métodos para esto.
  static $color='Rojo'; //Variable de clase estática

  //Métodos
  function observa(){
    echo ' observa una camisa ' .self::$color; // Se llama a una variable de clase
                                             // dentro de la clase.
  }
  function corre(){
    echo "$this->nombre corre muy rápido y", $this->observa(), "<br>";
    //Si queremos usar la variables o métodos de la misma clase, tenemos que
    // usar la pseudovariable '$this'y el operador de objeto '->'
  }
}
 ?>
