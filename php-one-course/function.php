<?php

function showText(){
    echo '<h1 style="text-align:center ; color:gray">string text from inside a function </h1>' ;
}

//------------------------------------------------------------------------------------------------------

function writeNameFunc($str1 , $str2){
    echo '<h1 style="text-align:center ; color:green">User name is ' . $str1 . " " . $str2 . '.</h1>' ;
}

//------------------------------------------------------------------------------------------------------


function registerEmail($emailParam){
    echo '<h1 style="text-align:center ; color:magenta">email address :' . $emailParam . 'is registered .</h1>' ;
}


//------------------------------------------------------------------------------------------------------


function addInputNumbers($a , $b){
    echo '<h1 style="text-align:center ; color:dodgerblue"> the sum of your numbers is :' . $a + $b . '.</h1>' ;
}


?>