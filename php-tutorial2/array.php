<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:olive">arrays</h1>' ;

$friends=array("Kevin" , "Karen" , "Oscar" , "Jim");


echo '<h1 style="text-align:center ; color:green">' . $friends[1] . ' is going to the seaside . </h1>' ; 


foreach($friends as $friendKey => $friendValue){

    echo '<h1 style="text-align:center ; color:gray">' . $friendKey + 1 . '. My friend is ' . $friendValue .  '.</h1>' ;

}

?>

<hr>

<?php 

for($i = 0 ; $i < count($friends) ; $i ++ ){
     echo '<h1 style="text-align:center ; color:dimgray">' . $i + 1 . '. My friend is :' . $friends[$i] .   '.</h1>' ; 
}

?>

<hr>

<?php

$friends[2]="Gigel" ;

echo '<h1 style="text-align:center ; color:crimson">' . $friends[2] . ' is watching TV . </h1>' ; 

for($i = 0 ; $i < count($friends) ; $i ++ ){
    echo '<h1 style="text-align:center ; color:dimgray">' . $i + 1 . '. My friend is :' . $friends[$i] .   '.</h1>' ; 
}

echo '<h1 style="text-align:center ; color:orange"> I have ' . count($friends) . ' friends .</h1>' ; 

$friends[5]="Pedro" ;

echo '<h1 style="text-align:center ; color:orange">My friends are : ' . implode(" , " , $friends) . '.</h1>' ;

echo '<h1 style="text-align:center ; color:orange"> I have ' . count($friends) . ' friends .</h1>' ;

?>