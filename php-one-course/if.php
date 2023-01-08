<?php
    $x = 16;
    $y = 5;
    $operator = '.'; // -, / , * , %, .
    
    if($operator == '+') {
        echo $x + $y;
    } elseif ($operator == '-') {
        echo $x - $y;
    } elseif ($operator == '/') {
        echo $x / $y;
    } elseif ($operator == '*') {
        echo $x * $y;
    } elseif ($operator == '%') {
        echo $x % $y;
    } elseif ($operator == '.') {
        echo $x . $y;
    } else {
        echo 'operatorul trebuie sa fie +,-,/,*,% sau .';
    }
?>