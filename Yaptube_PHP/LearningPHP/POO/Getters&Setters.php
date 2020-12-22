<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Movie{
        /* Visibility modifiers                    *
           public:                                 *
           private:                                */
        public $title;
        private $rating; // Para valores más delicados uso private

        function __construct($title, $rating){
          $this->title = $title;
          $this->setRating($rating) = $rating; //Recuerda también agregarlo al constructor
          echo "New Movie Created<br>";
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          if ($rating=="G" || $rating=="PG" ||$rating=="PG-13" ||$rating=="R" || $rating=="NR" ){
            $this->rating = $rating;
          } else { // Si se ingresa un valor incorrecto, se le asigna NR: No Rating
            $this->rating = "NR";
          }
        }
      }

      $avengers = new Movie("Avengers", "PG-13");
        //G, PG, PG-13, R, NR
      $avengers->setRating("DOG");
      echo $avengers->getRating();
     ?>
  </body>
</html>
