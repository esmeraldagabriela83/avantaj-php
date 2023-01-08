<?php
    $produse = array(
        'produs 1'=> 2300,
        'produs 2'=> 1300,
        'produs 3'=> 300,
        'produs 4'=> 1150,
        'produs 5'=> 1800,
        'produs 6'=> 2100,
        'produs 7'=> 600,
    );
?>
<form action="" method="post">
    Pret minim: <input type="number" name="minim" value="<?php
    if(isset($_POST['minim'])){
       echo $_POST['minim'] ;
    }
    ?>" 
    /> <br/>
    Pret maxim: <input type="number" name="maxim" value="<?php
    if(isset($_POST['maxim'])){
       echo $_POST['maxim'] ;
    }
    ?>" 
    /> <br/>
    <input type="submit" name="filtru" value="filtreaza" />
</form>
<p>
    Dupa completarea formularului, afisati o lista cu toate produsele (numele si preturile) care sunt cuprinse intre cele 2 valori introduse. 
</p>

<?php

echo '<ol>' ;

foreach($produse as $produsKey => $produsValue){
    echo '<li style="text-align:left ; color:gray ; font-size:1.5rem">' . $produsKey . ' are pretul <strong>' . $produsValue . '</strong></li>' ;
}

echo '</ol>' ;




if(isset($_POST['filtru'])){
    echo '<h1 style="text-align:center ; color:red">minim-ulL disponibil de plata este: ' . $_POST['minim'] . '</h1>' ; 
    echo '<h1 style="text-align:center ; color:green">maxim-ulL disponibil de plata este: ' . $_POST['maxim'] . '</h1>' ; 


    foreach($produse as $produsKey => $produsValue){

         if( $produsValue > $_POST['minim'] && $produsValue < $_POST['maxim'] ){

      echo '<h3 style="text-align:center ; color:olive">' . $produsKey . ' cu pretul ' . $produsValue . ' se incadreaza intre minim-ul: ' . $_POST['minim'] . ' si maxim-ul: ' . $_POST['maxim'] . '.</h3>' ;

         }else{
            echo '<h3 style="text-align:center ; color:tomato">acest produs : ' . $produsKey . ' nu iti este disponibil</h3>' ;
         }

    }


    //curs 6 15 12 2022

    // verificam trimiterea formularului (if isset)
    // parcurgem array-ul cu produse (foreach)
    // verificam daca valoarea produsului este intre minim si maxim din formular (if)
    // daca da, afisam lista (li)

    echo 'Produsele care au pretul intre ' .$_POST['minim'] .' si '. $_POST['maxim'];
    echo '<ol>';
    // cream un array gol pe care il vom popula cu produsele care corespunde filtrului de mai jos
    $rezultate = array();
    foreach($produse as $produs => $pret){
        if ($pret >= $_POST['minim'] && $pret <= $_POST['maxim'] ){
            echo '<li style="text-align:center ; color:cornflowerblue">' . $produs . ' are pretul ' . $pret . '</li>';
            $rezultate[] = $produs;
        }
    }
    if (count($rezultate) == 0) {
        echo '<li> niciun produs ...</li>';
    }
    echo '</ol>';


//curs 6 15 12 2022



echo 'Produsele care au pretul intre ' .$_POST['minim'] .' si '. $_POST['maxim'];
echo '<ol>';
// cream un array gol pe care il vom popula cu produsele care corespunde filtrului de mai jos
$rezultate2 = 0;
foreach($produse as $produs => $pret){
    if ($pret >= $_POST['minim'] && $pret <= $_POST['maxim'] ){
        echo '<li style="text-align:center ; color:green">' . $produs . ' are pretul ' . $pret . '</li>';
        $rezultate2 = $rezultate2 + 1 ;
    }
}
if ($rezultate2 == 0) {
    echo '<li> niciun produs ...</li>';
}
echo '</ol>';




}



?>

