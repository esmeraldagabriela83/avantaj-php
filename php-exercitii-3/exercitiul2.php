<?php 
$marci = array(
    'Audi' => 26000, 
    'Mercedes' => 35000,
    'Dacia' => 35020,
    'Toyota' => 30000,
    'BMW' => 45000,
);

ksort($marci);

echo '<ol>';
foreach($marci as $marca => $pret){


echo '<li style="text-align:center ; color:cornflowerblue">masina cu marca ' . $marca . ' costa ' . $pret . '</li>' ;

}
echo '</ol>';

?>




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



<?php



/* --- asezare in ordine alfabetica dupa cheie -- */

ksort($oameni);

/* --- asezare in ordine alfabetica dupa cheie -- */


echo '<h1 style="text-align:center ; color:gold">person job: ' . $oameni['Visan Raluca']['profesie'] . '</h1>' ; 


echo '<h1 style="text-align:center ; color:tomato">person pasiuni: ' . implode(" , " , $oameni['Fenechiu Viorica']['pasiuni']) . '</h1>' ; 


foreach($oameni as $omKey => $omValue){

echo '<h3 style="text-align:center ; color:magenta">persoana '  . $omKey . ' este de profesie ' . $oameni[$omKey]['profesie'] .  ' si are ' . $oameni[$omKey]['varsta'] . ' ani .</h3>' ; 

};


?>



<?php

echo '<ul>' ;

foreach($oameni as $omKey => $omValue){
    echo '<li style="text-align:center ;
                     color:cornflowerblue ;
                     font-size:1.5rem">persoana ' . $omKey . ' are ca pasiuni : ' . implode(" , " , $oameni[$omKey]['pasiuni']) . '.</li>' ;
}

echo '</ul>' ;

?>


<?php 
echo '<ol>' ;
foreach($oameni as $omKey => $omValue){

    if($oameni[$omKey]['profesie'] === 'inginer'){



        echo '<li style="color:green ; font-size:1.5rem"> persoana cu numele' . $omKey . ' este ' . $oameni[$omKey]['profesie'] . ' si are ca pasiuni : ' . implode(" , " , $oameni[$omKey]['pasiuni']) . '.</li>' ;



    }else{
     

        echo '<li style="color:red ; font-size:1.5rem"> persoana cu numele' . $omKey . ' este ' . $oameni[$omKey]['profesie'] . ' si are ca pasiuni : ' . implode(" , " , $oameni[$omKey]['pasiuni']) . '.</li>' ;

  
    }

}
echo '</ol>' ;
?>





















































<?php
    $eleviSec = array(
        'Ionescu Vlad' => array(
            'nota' => 5.5,
            'imgElev' => "https://images.pexels.com/photos/1300151/pexels-photo-1300151.jpeg?auto=compress&cs=tinysrgb&w=1600",
            'descriere' => 'one lorem ipsum',
            'colorElev' => 'green'
        ),
        'Popescu Vlad' => array(
            'nota' => 8,
            'imgElev' => "https://images.pexels.com/photos/1288182/pexels-photo-1288182.jpeg?auto=compress&cs=tinysrgb&w=1600",
            'descriere' => 'two lorem ipsum',
            'colorElev' => 'deeppink'
        ),
        'Marinescu Vlad' => array(
            'nota' => 9.5,
            'imgElev' => "https://images.pexels.com/photos/1104007/pexels-photo-1104007.jpeg?auto=compress&cs=tinysrgb&w=1600",
            'descriere' => 'three lorem ipsum',
            'colorElev' => 'yellow'
        ),
        'Popa Vlad' => array(
            'nota' => 6.5,
            'imgElev' => "https://images.pexels.com/photos/1619801/pexels-photo-1619801.jpeg?auto=compress&cs=tinysrgb&w=1600",
            'descriere' => 'four lorem ipsum',
            'colorElev' => 'olive'
        ),
        'Marin Vlad' => array(
            'nota' => 8.5,
            'imgElev' => "https://images.pexels.com/photos/969373/pexels-photo-969373.jpeg?auto=compress&cs=tinysrgb&w=1600",
            'descriere' => 'five lorem ipsum',
            'colorElev' => 'gold'
        ),
        'Dorin Vlad' =>array(
            'nota' => 10,
            'imgElev' => "https://images.pexels.com/photos/1620826/pexels-photo-1620826.jpeg?auto=compress&cs=tinysrgb&w=1600",
            'descriere' => 'six lorem ipsum',
            'colorElev' => 'magenta'
        ) ,
        'Dobre Marcela' => array(
            'nota' => 3.5,
            'imgElev' => "https://images.pexels.com/photos/13984654/pexels-photo-13984654.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load",
            'descriere' => 'seven lorem ipsum',
            'colorElev' => 'tomato'
        ),
        'Fenechiu Mihaela' =>array(
            'nota' => 8.3,
            'imgElev' => "https://images.pexels.com/photos/4453710/pexels-photo-4453710.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load",
            'descriere' => 'eight lorem ipsum',
            'colorElev' => 'BurlyWood'
        )
    );
?>


<h1>elevii si notele  in ordine alfabetica</h1>

<?php 



ksort($eleviSec);

foreach($eleviSec as $elevSec => $elevValue){

     if( $eleviSec[$elevSec]['nota'] >= 9.5 ){
        echo '<div style="border:3px solid green ; padding:0.5em ; margin:0.5em ; display:flex ; align-items:center ; justify-content:center ; flex-direction:column ">
             <h3 style="color :' . $eleviSec[$elevSec]['colorElev']. '">elevul ' . $elevSec . ' cu nota ' . $eleviSec[$elevSec]['nota'] . ' si primeste <strong style="color:green"> bursa de merit </strong> </h3>
             <p>Despre elev stim acestea: ' . $eleviSec[$elevSec]['descriere'] . ' .</p>
             <img style="width:10%" src="'. $eleviSec[$elevSec]['imgElev'] .'" alt="elev-img-bursa-merit" />
             </div>' ;
     }elseif($eleviSec[$elevSec]['nota'] > 8 && $eleviSec[$elevSec]['nota'] < 9.5){
        echo '<div style="border:3px solid tomato ; padding:0.5em ; margin:0.5em ; display:flex ; align-items:center ; justify-content:center ; flex-direction:column ">
             <h3 style="color :' . $eleviSec[$elevSec]['colorElev']. '">elevul ' . $elevSec . ' cu nota ' . $eleviSec[$elevSec]['nota'] . ' si primeste <strong style="color:tomato"> bursa de studiu </strong> </h3>
             <p>Despre elev stim acestea: ' . $eleviSec[$elevSec]['descriere'] . ' .</p>
             <img style="width:10%" src="'. $eleviSec[$elevSec]['imgElev'] .'" alt="elev-img-bursa-studiu" />
             </div>' ;
     }else{
        echo '<div style="border:3px solid blue ; padding:0.5em ; margin:0.5em ; display:flex ; align-items:center ; justify-content:center ; flex-direction:column ">
             <h3 style="color :' . $eleviSec[$elevSec]['colorElev']. '">elevul ' . $elevSec . ' cu nota ' . $eleviSec[$elevSec]['nota'] . ' si  <strong style="color:blue">nu primeste bursa de nici un fel </strong> </h3>
             <p>Despre elev stim acestea: ' . $eleviSec[$elevSec]['descriere'] . ' .</p>
             <img style="width:10%" src="'. $eleviSec[$elevSec]['imgElev'] .'" alt="elev-img-bursa-nu" />
             </div>' ;
     }

}

?>