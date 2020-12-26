<?php

$host = 'localhost';
$dbname = 'yap!tube';
$port = '5432';
$user = 'postgres';
$password = '123456';

$conn = pg_connect( "host=$host dbname=$dbname port=$port user=$user password=$password") or die ("Error de conexion".pg_last_error());

?>
