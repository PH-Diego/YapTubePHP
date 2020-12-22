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

        function __construct($title, $author, $pages){
          $this->title=$title;
          $this->author=$author;
          $this->pages=$pages;
          echo "New Book Created <br>";
        }
      }

      $book1 = new Book("Harry Potter", "JK Rowling", 400);
      $book1->title="Hunger Games";
      $book2 = new Book("Lord of the Rings", "Tolkien", 700);

      echo "$book1->title<br>";
     ?>

  </body>
</html>
