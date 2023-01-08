<?php
    $filme = array(
        'film1' => array(
            'gen' => 'drama',
            'durata' => '120 minute',
            'rating' => '14+'
        ),
        'film2' => array(
            'gen' => 'drama',
            'durata' => '100 minute',
            'rating' => '12+'
        ),
        'film3' => array(
            'gen' => 'comedie',
            'durata' => '140 minute',
            'rating' => '10+'
        ),
        'film4' => array(
            'gen' => 'horror',
            'durata' => '100 minute',
            'rating' => '18+'
        ),
        'film5' => array(
            'gen' => 'drama',
            'durata' => '130 minute',
            'rating' => '18+'
        )
    );
?>
<p>Avand array-ul de mai sus afisati doar filmele din genul drama  care au durata de cel putin 120 minute</p>
<p>Rezultat dorit</p>
<h3> Drame de minim 2 ore </h3>
<ul>
    <li>film 1 - 120 minute - rating: 14+</li>
    <li>film 5 - 130 minute - rating: 18+</li>
</ul>

<hr>

<ul>
<?php
    foreach($filme as $film => $detalii) {
        if($detalii['gen'] == 'drama' &&  intval($detalii['durata']) >= 120 ){
            echo '<li>' . $film . ' - ' . $detalii['durata'] . ' - rating: ' . $detalii['rating'] .  '</li>';
        }   
    }
?>
</ul>