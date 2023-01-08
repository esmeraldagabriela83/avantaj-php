<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:indigo">inheritance</h1>' ;



class Chef {

     function makeChicken(){
        echo "The chef makes chicken <br> " ;
     }

     function makeSalad(){
        echo "The chef makes salad <br> " ;
     }

     function makeSpecialDish(){
        echo "The chef makes bbq ribs <br> " ;
     }

}


$chef = new Chef() ; 

$chef -> makeChicken() ;

////

class italianChef extends Chef {

    function makePasta(){
        echo "The chef makes pasta <br> " ;
     } 

     function makeSpecialDish(){
        echo "The chef makes chicken parm <br> " ;
     }

}


$italianchef = new italianChef() ; 

$italianchef -> makeChicken() ;

$italianchef -> makePasta() ;



//over writting a function

$chef -> makeSpecialDish() ;

$italianchef -> makeSpecialDish() ;



?>