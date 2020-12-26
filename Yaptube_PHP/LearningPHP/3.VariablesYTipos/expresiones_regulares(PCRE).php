<?php
 $text = 'hola mundo en 123';
 $regex = '/hola/'; // La palabra que quieres buscar

/*  '/hola/' -> cuenta las apariciones de la palabra hola.
 *  '/^hola/' -> sólo al principio de la frase.
 *  '/hola$/' -> sólo al final
 *  '/hOla$/i' -> no es sensible a mayúsculas
 *  https://www.php.net/manual/es/book.pcre.php -> otros modificadores

 * En este caso es importante leer la documentación &&/|| ver videos 
 */

 echo preg_match($regex, $text);
 ?>
