<?php 
$tara_dorita = 'Romania';

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

echo '<h3 style="color:blue ; text-align: center">Tara dorita este ' . $tara_dorita . '</h3>' ;

echo '<h3 style="color:cornflowerblue ; text-align: center">capitala dorita este ' . $capitale[$tara_dorita] . '</h3>' ;

echo '<p style="color:tomato ; text-align: center ; font-size:1.5rem"> Tara dorita este ' . $tara_dorita . '. <br></br> 
      Ea are capitala : <strong>' . $capitale['Romania'] . '</strong>  si o populatie de <strong>' . $populatie['Bucuresti'] . '</strong> </p>' ;

      echo '<p style="color:magenta ; text-align: center ; font-size:1.5rem"> Tara vecina cu  ' . $tara_dorita . '
       are capitala : <strong>' . $capitale['Bulgaria'] . '</strong>  si o populatie de <strong>' . $populatie['Sofia'] . '</strong> </p>' ;
?>


<!-- ------------------------------------------------------------------------------------------------------ -->

<?php 
echo '<hr>' ;

foreach($capitale as $tara => $oras){

    echo '<h2 style="text-align:center ; color:green">Tara ' . $tara . ' are  capitala : ' . $oras . '</h2>' ;

}

?>


<?php
echo '<hr>' ;

echo '<ul>' ;

foreach($populatie as $capitala => $populatie){

echo '<li style="text-align:center ; color:blue ; font-size:1.5rem">Capitala ' . $capitala . ' are o populatie de ' . $populatie .' </li>' ;

};

echo '</ul>' ;


?>



<!-- ------------------------------------------------------------------------------------------------------ -->














