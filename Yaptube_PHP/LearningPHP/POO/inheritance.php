<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class Chef{
      function makeChicken(){
        echo "El chef hizo pollo <br>";
      }
      function makeSalad(){
        echo "El chef hizo ensalada <br>";
      }
      function makeSpecialDish(){
        echo "El chef hizo costillitas <br>";
      }
    }

    class ItalianChef extends chef{
      function makePasta(){
        echo "El chef hizo pasta <br>";
      }
      function makeSpecialDish(){ //Overriding a function
        echo "El chef hizo bolognesa a la pomodoro <br>";
      }
    }

    $chef1 = new Chef();
    $chef1->makeChicken();
    $chef1->makeSpecialDish();
    $chef2 = new ItalianChef();
    $chef2->makeChicken();
    $chef2->makePasta();
    $chef2->makeSpecialDish();

   ?>
  </body>
</html>
