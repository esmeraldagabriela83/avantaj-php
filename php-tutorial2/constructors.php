<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:blue">constructors</h1>' ;

class Book {
    var $title ;
    var $author ;
    var $pages ;
    

    // function __construct(){
    //     echo "new book created" ;
    // }

    function __construct($userName , $userAge){
        echo "new book created" . '<br>'  ;
        echo $userName . '<br>' ;
        echo $userAge . '<br>'  ;
        echo '<h1 style="text-align:center ; color:skyblue">user ' . $userName . ' is ' . $userAge . ' years old and enjoy reading books . </h1>' ; 
       
    }

   
}

$book11=new Book("Alin" , 70) ;

$book11 -> title = "title" ;
$book11 -> author = "autor1" ;
$book11 -> pages = 100 ;

echo '<h1 style="text-align:center ; color:cornflowerblue">Autorul ' . $book11 -> author . ' a scris cartea ' . $book11 -> title . ' ce contine ' . $book11 -> pages . ' pagini . </h1>' ; 


echo '<hr>' ;

$book12=new Book("elena" , 84) ;

$book12 -> title = "title" ;
$book12 -> author = "autor2" ;
$book12 -> pages = 120 ;

echo '<h1 style="text-align:center ; color:magenta">Autorul ' . $book12 -> author . ' a scris cartea ' . $book12 -> title . ' ce contine ' . $book12 -> pages . ' pagini . </h1>' ; 

echo '<hr>' ;

?>
















<?php
class Book2 {
    //use public instead of var 
    //ex la getters and setters

    public $title ;
    public $author ;
    public $pages ;
    

    function __construct($paramTitle , $paramAuthor , $paramPages){
        
        $this -> title = $paramTitle ;
        $this -> author = $paramAuthor ;
        $this -> pages = $paramPages ;
        
        echo '<h1 style="text-align:center ; color:tomato">Cartea ' . $this -> title . ' scrisa de autorul ' . $this -> author . ' are ' . $this -> pages . ' pagini . </h1>' ;
    }


    function methodFunc(){
        echo '<h1 style="text-align:center ; color:SeaGreen"> method : Cartea ' . $this -> title . ' scrisa de autorul ' . $this -> author . ' are ' . $this -> pages . ' pagini</h1>' ;
    }

    


}



$book13= new Book2("Carte 13" , "Autor 13" , 60) ;

echo $book13 -> title ;

$book13 -> title = "Hunger games" ;

echo $book13 -> methodFunc() ;


echo '<hr>' ;

echo $book13 -> title ;

$book14= new Book2("Carte 14" , "Autor 14" , 140) ;

echo $book14 -> author ;

echo $book14 -> methodFunc() ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and constructor</title>
</head>
<body>
    
      <form action="constructors.php" method="post">

<label for="titluCarteUser">introdu nume carte</label><br>
<input type="text" name="titluCarte" id="titluCarteUser"/><br>


<label for="titluAutorUser">introdu nume autor</label><br>
<input type="text" name="autorCarte" id="titluAutorUser"/><br>


<label for="nrPagesUser">introdu nr de pagini</label><br>
<input type="number" name="nrPagini" id="nrPagesUser"/><br>


      <button type="submit" name="submitForm">submit</button>

      </form>

</body>
</html>

<?php

if( isset($_POST['submitForm']) ){

     echo '<h1 style="text-align:center ; color:LimeGreen"> numele cartii citite de tine este : ' . $_POST['titluCarte'] . '</h1>' ;

     echo '<h1 style="text-align:center ; color:gold"> autorul cartii citite de tine este : ' . $_POST['autorCarte'] . '</h1>' ;

     echo '<h1 style="text-align:center ; color:deeppink"> nr de pagini al cartii citite de tine este : ' . $_POST['nrPagini'] . '</h1>' ;

     echo new Book2($_POST['titluCarte'] , $_POST['autorCarte'] , $_POST['nrPagini']) ;

}

?>