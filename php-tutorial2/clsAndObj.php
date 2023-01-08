<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:tomato">classes and objects in PHP</h1>' ;

//an object is an instance of a class


class Book {
    var $title ;
    var $author ;
    var $pages ;
}

$book1 = new Book ;

$book1 -> title = "Somnoroase Pasarele" ;
$book1 -> author = "Mihai Eminescu" ;
$book1 -> pages = 60 ;

echo $book1 -> title ;

echo '<h3 style="text-align:center ; color:tomato">Cartea ' . $book1 -> title . ' cu autorul ' . $book1 -> author . ' contine ' . $book1 -> pages . ' pagini si merita citita .</h3>' ; 

echo '<hr>' ;

$book2 = new Book ;

$book2 -> title = "Amintiri din copilarie" ;
$book2 -> author = "Ion Creanga" ;
$book2 -> pages = 1060 ;

echo '<h3 style="text-align:center ; color:green">Cartea ' . $book2 -> title . ' cu autorul ' . $book2 -> author . ' contine ' . $book2 -> pages . ' pagini si merita citita .</h3>' ; 

echo '<hr>' ;
$book3 = new Book ;

$book3 -> title = "Aceasta tara de vis" ;
$book3 -> author = "Nichita Stanescu" ;
$book3 -> pages = 3 ;

echo '<h3 style="text-align:center ; color:blue">Cartea ' . $book3 -> title . ' cu autorul ' . $book3 -> author . ' contine ' . $book3 -> pages . ' pagini si merita citita .</h3>' ; 



?>