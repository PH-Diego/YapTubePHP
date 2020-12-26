<?php

  function call($arg){
    if ($arg<=10){
      echo "$arg<br>";
      call(++$arg);
    }
  }

  call(1);


 ?>
