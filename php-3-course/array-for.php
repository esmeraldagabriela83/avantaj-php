<p>Afisati numerele pare din seria: (13,54,3,76,12,78)</p>
<?php
    $numere = array(13,54,3,76,12,78);
    for ($i=0; $i < count($numere); $i ++){
        if ($numere[$i] % 2 == 0){
            echo $numere[$i] . '<br/>';
        }
    }
?>