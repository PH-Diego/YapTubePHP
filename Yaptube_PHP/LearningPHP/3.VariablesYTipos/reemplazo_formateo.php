<?php
  $search= ' ';
  $replace=':';
  $text='91 75 1A EC 9A C7';
  echo str_replace($search,$replace,$text);
  echo "<br>";
  echo str_replace($search,$replace,$text,$count);
  echo "<br>";
  echo "Hay $count ' '";
  echo "<br>";
  echo $text;

  // FORMATO
  //https://www.php.net/manual/en/function.sprintf.php
  echo "<br>";
  echo "<br>";
  $arg1=1994;
  $arg2='PHP';
  $text2='En %d fue creado %s';
  echo sprintf($text2,$arg1,$arg2);
 ?>
