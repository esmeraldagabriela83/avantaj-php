<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:green">object functions</h1>' ;


class Student{
    var $name ;
    var $major ;
    var $gpa ;

function __construct( $name , $major , $gpa ){
      $this -> name = $name ;
      $this -> major = $major ;
      $this -> gpa = $gpa ;
}

function hasHonors(){
    if($this -> gpa >= 3.5){
       return 'true' ;
    }else{
        return 'false' ;
    }
}

}

$student1 = new Student("Jim" , "Business" , 2.8) ;
$student2 = new Student("Pam" , "Art" , 3.6) ;

echo $student1 -> hasHonors() . '<br>' ;
echo $student2 -> hasHonors() ;


?>