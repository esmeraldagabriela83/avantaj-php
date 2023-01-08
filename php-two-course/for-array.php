Doar numerele mai mari decat 150  dintre (123,543,23,65,763,233, 80,162)<br/>
<?php
    $numere = array(123,543,23,65,763,233,80,162);

    for ($k = 0; $k < count($numere); $k++ ){
        // $k va fi pe rand: 0,1,2,.. 7
        if($numere[$k] > 150) {
            echo $numere[$k] . '<br/>';
        }
    }
?>