<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:gold">building a better calculator</h1>' ;

?>


<form action="calculator.php" method="post">

First Num: <input type="number" name="num1" step="0.01"/><br>

OPERATOR: <input type="text" name="op" /><br>

Second Num: <input type="number" name="num2"  step="0.01"/><br>

<input  type="submit" name="submit" />

</form>

<?php

if($_POST['submit']){
    $num1 = $_POST['num1'] ;
    $op = $_POST['op'] ;
    $num2 = $_POST['num2'] ;

    echo  $num1 . '<br>' ;
    echo  $op . '<br>';
    echo  $num2  . '<br>';
}


if($op == "+"){
    echo '<h1 style="text-align:center ; color:gold">' . $num1 + $num2 . '</h1>' ;
}elseif($op == "-"){
    echo '<h1 style="text-align:center ; color:magenta">' . $num1 - $num2 . '</h1>' ;
}elseif($op == "/"){
    echo '<h1 style="text-align:center ; color:green">' . $num1 / $num2 . '</h1>' ;
}elseif($op == "*"){
    echo '<h1 style="text-align:center ; color:magenta">' . $num1 * $num2 . '</h1>' ;
}else{
    echo '<h1 style="text-align:center ; color:red">invalid operator / not possible</h1>' ;
}


?>