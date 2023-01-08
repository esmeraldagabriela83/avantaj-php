<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:DarkKhaki">for loop</h1>' ;
$index=1;

while($index <= 5){
    echo '<h1 style="text-align:center ; color:BurlyWood">index variable is : ' . $index . '</h1>' ;
    echo  '<h3 style="text-align:center ; color:BurlyWood">show this string</h3>' ;
    $index++ ;

}


for($i = 1 ; $i <= 5 ; $i ++){
    echo '<h1 style="text-align:center ; color:DarkTurquoise">index variable is : ' . $i . '</h1>' ;
    echo  '<h3 style="text-align:center ; color:DarkTurquoise">show this string</h3>' ;
}

?>

<?php

$happyNrs=array(10 , 20 , 30 , 40 , 50 ) ; 

for($i = 0 ; $i < count($happyNrs) ; $i ++){
echo '<h1 style="text-align:center ; color:DodgerBlue">' . $happyNrs[$i] . '</h1>' ;
}

?>