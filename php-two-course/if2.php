<?php
    $nume = 'Mihaela';
    $ani = '64';
    $profesie = 'Doctor';

    if ($ani < 75 && $profesie == 'Animal lover') {
        echo '<h1>' . $nume . ' are ' . $ani .' ani si are profesia de: ' . $profesie . '</h1>';
    } elseif ($ani < 65) {
        echo '<h1>' . $nume . ' are ' . $ani .' ani si are alta profesie </h1>';
    } else {
        echo '<h1>' .  $nume . ' are ' . $ani . ' si probabil este la varsta pensionarii</h1>';
    }    

?>
