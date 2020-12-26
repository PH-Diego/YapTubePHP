<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      class Book{ //Definición de la clase Book
        var $title;
        var $author;
        var $pages;
      }

      $book1 = new Book; // Objeto del tipo $book1
                         // También conocido como instancia de Clase
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 400;

      $book2 = new Book; // Objeto del tipo $book1
      $book2->title = "Lord of the Rings";
      $book2->author = "Tolkinen";
      $book2->pages = 700;

      echo "$book1->title<br>";
      echo "$book2->title<br>";
     ?>

  </body>
</html>
