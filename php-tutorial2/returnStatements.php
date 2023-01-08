<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:Chartreuse">return statements</h1>' ;

//2 ^ 3 -> 2 * 2 * 2
//return is going to be the last line of the function

function cube($num){

     return $num * $num * $num ;

}

//apel functie

echo cube(4);

echo '<h1 style="color:cornflowerblue ; text-align:center"> 4 ^ 3 is :'  . cube(4) . '</h1>' ;

echo cube(5);

echo '<h1 style="color:tomato ; text-align:center"> 5 ^ 3 is :'  . cube(5) . '</h1>' ;

?>