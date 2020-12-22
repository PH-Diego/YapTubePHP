<?php

$con = pg_connect( "host=localhost dbname=Yap!tube port=5432 user=postgres password=123456") or die ("Error de conexion".pg_last_error());

echo "Hola Mundo";

$result = pg_query($con, "SELECT * FROM cuenta");
if (!$result)
{
	echo "Something went wrong.";
	exit;
}
$arr = pg_fetch_all($result);
echo "<pre>";
print_r($arr);
echo "</pre>";
/*
<form action="ejemplo.php">
  <p>Nombre: <input type="text" name="nombre"></p>
  <p><input type="submit" value="Enviar"></p>
</form>
*/
?>
