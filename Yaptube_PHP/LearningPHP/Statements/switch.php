<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="switch.php" method="post">
      What was your grade?
      <input type="text" name="grade">
      <input type="submit">
    </form>

    <?php
      $grade = " ";
      if(isset($_POST["grade"])){
       $grade = $_POST["grade"] ?? null;
      }
      switch($grade){
        case "A":
          echo "What a grade!";
          break;
        case "B":
          echo "It is pretty good";
          break;
        case "C":
          echo "It is good enough...";
          break;
        case "D":
          echo "This is not good";
          break;
        case "F":
          echo "You did it BAAAD";
          break;
        case " ":
          break;
        default:
          echo "Invalid Grade";
      }
      echo "<br>", $grade;
     ?>

  </body>
</html>
