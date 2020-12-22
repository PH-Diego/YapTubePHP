<?php

$result = pg_query($con, "SELECT * FROM Cuenta");
if (!$result)
{
	echo "Something went wrong.";
	exit;
}
$arr = pg_fetch_all($result);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>