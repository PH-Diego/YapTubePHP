<?php
  $num = 13; //variable global
  echo "$num<br>";
  $num = 16; //se puede cambiar su valor
  echo "$num<br>";
  $num = "gato";//incluse se puede cambiar su tipo
  echo "$num<br>";
  echo "<br><br>";
  $rosa = 'Color';
  function test($rosa){
    $rosa = 'Flor'; //variable local
    echo "$rosa<br>";
  }
  test($rosa); //imprimo la varibale local '$rosa' de la función test;
  echo "$rosa<br>"; //imprimo variable global '$rosa'
  echo "<br><br>";
  function test2(){
    global $rosa;
    echo "$rosa<br>"; //Imprimo la variable global '$rosa'
  }
  test2();

  /* constantes: Son variables cuyo valor no puede modificarse *
   *  Se pueden usar define y const                            */
   echo "<br><br>";

  const PATH1='C://etc';
  echo PATH1;
  define('PATH2', 'C://etc2');
  echo PATH2;

  /* Desventajas:                                                    *
   *    const: no puedes asignarle una variable ni el retorno de una *
   *           función (define constantes en tiempo de compilación). *
   *           Se puede usar en ámbito global y en clase.            *
   *    define: (define constantes en tiempo de ejecución).          *
   *            Sólo se puede usar en ámbito global.                 *


 ?>
