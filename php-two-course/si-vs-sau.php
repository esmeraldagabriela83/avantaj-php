<?php
    $x = 5;
    $y = 6;

    if ($x < $y || $x > 2 && $x == $y ){
    //    true SAU true SI false
    // fara prioritate: true SI false -> false  - GRESUT
    // cu prioritate: true  SAU  false -> true  - ADEVARAT (&& se executa inaintea lui ||)
    // similar cu : 2 + 3 * 2 = 2 + 6  = 8 (* se executa inainte de + intr-un mod similar cu && fata de ||)
        echo 'Exista prioritate  intre && si ||';
    } else {
        echo 'NU exista prioritate intre && si ||';
    }

?>