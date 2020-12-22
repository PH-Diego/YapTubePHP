<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Functions Definitions
      function sayHi()
      {
          echo "Hello Stranger<br>";
          echo "Get the hell out of here<br>";
      }
      function sayHi2($name, $age)
      {
        echo "Hello $name, you are $age<br>";
        echo "Welcome!<br>";
      }

      sayHi();
      sayHi2("Diego",40);
      sayHi2("Tom",42);
      sayHi2("Dave",44);
      sayHi2("Oscar",46);

     ?>
  </body>
</html>
