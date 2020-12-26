<?php
 require_once "connection.php";



 session_start();
 if($_POST['userName']==$user && $_POST['password']==$pass){
   $_SESSION['login']='Administrador';
   header('Location: index.php');
 } else {
   echo 'Usuario y contraseña incorrectos';
 }
 /*
 echo $user;
 echo $curr_user;
 echo $pass;
 echo $curr_pass;
 echo $power;
 echo $curr_power;
 if ($curr_user!='No Registrado' && $curr_pass!='NULL'){
   $conn = conexion();
   $account_data = pg_query($conn, "SELECT nombre_cuenta, contrasena
                                     FROM public.cuenta
                                     WHERE nombre_cuenta = '$user' AND contrasena = '$pass';");
   $existe_cuenta = pg_affected_rows($account_data);

   if ($existe_cuenta >= 1)
   {
     echo "El logueo ha sido exitoso.";
     exit;
   } else {
     echo "<br>error";
   }
   print_r($account_data);
 }
 */
 ?>
