<?php
  /* Las comillas dobles son más bacanes, porque te dejan meter variables
     adentro y otros carácteres, por ejemplo, algunas etiquetas html. Se
     pueden escapar carácteres con el '\'.                                   */
  /* Las comillas dobles son literales. También se pueden escapar carácteres,
     pero no todos.                                                          */

  /* HEREDOC es como las comillas DOBLES
     NOWDOC es como las comillas SIMPLES. */

  $palabra = 'alcanzar';
  //HEREDOC
  $texto =<<< FRASE
  Con "esfuerzo" y perseverancia 'podrás' $palabra tus  metas. <br> Yo lo sé.
  FRASE;
  echo $texto;
  echo "<br>";
  //NOWDOC
  $texto2 =<<< 'FRASE2'
  Con "esfuerzo" y perseverancia 'podrás' $palabra tus  metas. <br> Yo lo sé.
  FRASE2;
  echo $texto2;





 ?>
