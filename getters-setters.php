<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Movie{
        // visibility modifier
        // public can be accessed to anybody 
         //private does not allow access
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this->title=$title;
            $this->setRating($rating);

        }
        // returns the rating
        function getRating(){
            return $this->rating;
        }
        //sets the rating to 
        function setRating($rating){
            if($rating == "G" || $rating == "PG" || $rating == "PG-13" ||$rating == "R" ){
                $this->rating=$rating;
            }else{
                $this->rating="NR";
            }
        

        }
    }
    $avengers = new Movie("Avengers", "Dog");

    echo "$avengers->title<br>";
    $avengers->setRating("Dog");
    echo $avengers->getRating() ;
    ?>
    
</body>
</html>