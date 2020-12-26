<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <!-- Cuando usamos php, a menudo queremos obtener datos del usuario.
     esta información la podemos obtener mediante "text box'es" o botones.
     Para realizar esta implementación antes debemos preparar algo llamado "form"
     Un formulario es un elemento de html que le permite al usuario hacer un input
     y que luego le pasa esa data a nuestros programas de php -->
     <!-- Dentro de una "form" puede ir un textbox, un regular button, un submit button, etc -->
     <form action="input.php" method="get"> <!-- form action="nombre de la página de php que "handel" la entrada -->
       Apellido: <input type="text" name="apellido"> <!-- type="text" == textbox -->
       <br>
       Edad: <input type="number" name="edad">
       <input type="submit"> <!-- type="submit" == botón para subir la info -->
     </form>

     <br>
     
     Your last name is <?php echo $_GET["apellido"] ?>
     <br>
     Your age is <?php echo $_GET["edad"] ?>
     <br>
  </body>
</html>
