<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- OJO con el step="0.001" -->
    <form action="better_calculator.php" method="post">
      First Number: <input type="number" step="0.001" name="num1"> <br>
      Operation: <input type="text" name="op"> <br>
      Second Number: <input type="number" step="0.001" name="num2"> <br>
      <input type="submit">
    </form>

    <?php
      if(isset($_POST["num1"])){
        $num1 = $_POST["num1"];
      }
      if(isset($_POST["op"])){
        $op = $_POST["op"];
      }
      if(isset($_POST["num2"])){
        $num2 = $_POST["num2"];
      }

      if ($op == "+"){
        echo $num1 + $num2;
      } elseif ($op == "-"){
        echo $num1 - $num2;
      } elseif ($op == "*"){
        echo $num1 * $num2;
      } elseif ($op == "/"){
        echo $num1 / $num2;
      } elseif ($op == "%"){
        echo $num1 % $num2;
      } else {
        echo "Invalid input";
      }
    ?>
  </body>
</html>
