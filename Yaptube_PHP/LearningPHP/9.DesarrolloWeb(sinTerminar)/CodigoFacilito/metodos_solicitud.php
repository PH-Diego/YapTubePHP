<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="form.php" method="post">
      <table>
        <th> <h1>Registro</h1>
        </th>
        <?php
        // Mediante este array llenaré lo que se mostrará en cada fila del formulario
          $data = array('name'=>'Nombre','lastName'=>'Apellido','address'=>'Dirección','phone'=>'Teléfono');
          foreach($data as $key=>$value):
         ?>
         <tr>
           <td><?php echo $value ?>
           </td>
           <td><input type="text" name=<?php echo $key; ?>>
           </td>
         </tr>
       <?php endforeach; ?>
       <tr>
         <td>Sexo
         </td>
         <td>
           <input type="radio" name='sex' value="Mujer"> Mujer
           <input type="radio" name='sex' value="Mujer"> Hombre
         </td>
       </tr>
       <tr>
         <td><input type="submit" name="submit" value="Guardar">
         </td>
       </tr>


      </table>
    </form>

  </body>
</html>
