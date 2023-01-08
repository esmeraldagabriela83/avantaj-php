<?php 
$tara_dorita = 'Ungaria';
    $capitale = array(
        'Romania' => 'Bucuresti',
        'Bulgaria' => 'Sofia',
        'Ungaria' => 'Budapesta',
    );

    $populatie = array(
        'Bucuresti' => '1.83 milioane',
        'Sofia' => '1.24 milioane',
        'Budapesta' => '1.75 milioane',
    );
?>
<p>Avand array-urile de mai sus, afisati in pagina populatia capitalei pentru tara dorita</p>

<?php
echo '<hr>' ;

// v1
    $capitala_dorita = $capitale[$tara_dorita];
    echo 'Populatia  capitalei ' . $tara_dorita .' are '.  $populatie[$capitala_dorita];

// end v1

echo '<hr>' ;


//v2 cu foreach
foreach($capitale as $tara => $capitala){
    echo  $tara .' are capitala la '. $capitala . ' cu o populatie de: '.  $populatie[$capitala].'<br/>';
}
   
// end v2
?>