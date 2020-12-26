<?php
  // se puede hacer un juego como battleship
  $battleShip=array('A'=>array('Mar','Barco','Mar','Mar'), //barco en A1
                    'B'=>array('Mar','Mar','Mar','Mar'),
                    'C'=>array('Mar','Mar','Barco','Mar'), //barco en C2
                    'D'=>array('Mar','Mar','Mar','Mar'));
  print_r($battleShip);

  $coordinates=$battleShip['A'][0];
  echo $coordinates, "<br>";
  $coordinates2=$battleShip['A'][1];
  echo $coordinates2, "<br>";

 ?>
