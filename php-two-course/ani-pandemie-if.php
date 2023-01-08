<?php
    $an = 1908;

    if(
        $an >= 2019 && $an < 2022 || 
        $an > 1901 && $an <= 1905
    ){
        echo $an . ' an de pandemie';
    } else {
        echo $an . ' de libertate';
    }
?>