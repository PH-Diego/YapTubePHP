<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
          $this->name = $name;
          $this->major = $major;
          $this->gpa = $gpa;
          echo "New Student Created<br>";
        }

        function hasHonors(){
          $honor = "false<br>";
          if($this->gpa >= 3.5){
            $honor = "true<br>";
          }
          return $honor;
        }

      }

      $student1 = new Student("Jim", "Business", 2.8);
      $student2 = new Student("Pam", "Art", 3.6);

      echo $student1->hasHonors();
      echo $student2->hasHonors();
     ?>
  </body>
</html>
