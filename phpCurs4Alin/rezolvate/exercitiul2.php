<?php 
    $oameni = array(
        'Visan Raluca' => array(
            'profesie'=> 'inginer',
            'varsta'=> 25, 
            'pasiuni'=> array('pictura','lectura','gradinarit')
        ),
        'Constantinescu Florin Mihai' => array(
            'profesie'=> 'doctor',
            'varsta'=> 25, 
            'pasiuni'=> array('fotbal','muzica','calatorii')
        ),
        'Florea Elena' => array(
            'profesie'=> 'inginer',
            'varsta'=> 32, 
            'pasiuni'=> array('lectura','calatorii')
        ),
        'Brancoveanu Marcel' => array(
            'profesie'=> 'doctor',
            'varsta'=> 37, 
            'pasiuni'=> array('box','lectura','gatit')
        ),
        'Dobre Marcel' => array(
            'profesie'=> 'avocat',
            'varsta'=> 46, 
            'pasiuni'=> array('muzica','sporturi extreme','calarit')
        ),
        'Fenechiu Viorica' => array(
            'profesie'=> 'inginer',
            'varsta'=> 50, 
            'pasiuni'=> array('shopping','calatorii')
        ),
    );

?>

<p>
    Creati o lista (&lt;ol&gt;) cu toti inginerii aranjati in ordine alfabeltica dupa nume (afisati in fiecare &lt;li&gt; nume prenume si pasiuni)
</p>
<ol>
<?php
    ksort($oameni);
    
    foreach($oameni as $nume => $info){
        if ($info['profesie'] === 'inginer'){
            echo '<li>' .  $nume . ' pasiuni: ' ;
            
            $pasiuni = $info['pasiuni'];
            foreach($pasiuni as $pasiune){
                echo ' '. $pasiune;
            } 
            
            echo '</li>';
        }
    }
?>
</ol>