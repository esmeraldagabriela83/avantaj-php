<h3>Ce poti cumpara cu 10 lei</h3>
<ul>

<?php
    $produse = array(
        'paine' => '3 lei',     // 1 buc
        'faina' => '20 lei',    // pe kg
        'apa' => '5 lei',       // 2 L
        'ulei' => '15 lei',      // 1 L
    );

    arsort($produse); // sorteaza array-ul asociativ descrescator (reverse) dupa valori 

    foreach ($produse as $produs => $pret) {
        if (floatval($pret) < 10) {
            echo '<li>'. $produs. ' ('. $pret. ')</li>';
        }
    }


    


?>

</ul>