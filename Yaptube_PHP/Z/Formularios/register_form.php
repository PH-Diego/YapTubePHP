<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <form action="register.php" method="post">
      <table>
        <th> <h1>Registro</h1>
        </th>
         <tr>
           <td>Nombre
           </td>
           <td><input type="text" name='name'>
           </td>
         </tr>
         <tr>
           <td>Contraseña
           </td>
           <td><input type="text" name='pass'>
           </td>
         </tr>
       <tr>
         <td>Poder Social
         </td>
         <td>
           <input type="radio" name='power' value="Ciudadano"> Ciudadano
           <input type="radio" name='power' value="Villano"> Villano
           <input type="radio" name='power' value="Héroe"> Héroe
         </td>
       </tr>
       <tr>
         <td><input type="submit" name="submit" value="Enviar">
         </td>
       </tr>
      </table>
    </form>

  </body>
</html>
