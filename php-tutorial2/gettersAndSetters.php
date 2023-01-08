<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:yellowgreen">getters and setters</h1>' ;


class Movie{

    public $title ;
    private $rating ;

    function __construct($title , $rating){
        $this -> title = $title ;
        $this -> setRating($rating) ;
    }

    function getRating(){
        return $this -> rating ;
    }

    function setRating($rating){

        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" ){
           $this -> rating = $rating ;
        }else{
            $this -> rating = "NR" ;
        }

        
    }

}



$avengers = new Movie("Avengers" , "PG") ;

//$avengers -> setRating("R");

echo $avengers -> getRating() ;

?>