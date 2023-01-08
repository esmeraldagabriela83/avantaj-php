<?php
    $tari = array(
        'SUA' => 19.485, 
        'China' => 12.238,
        'Japonia' => 4.872,
        'Germania' => 3.693,
        'India' => 2.651
    );
?>
<form action="" method="get">

    <select name="ordonare">

        <option  value="nume_asc" <?php
        if(isset($_GET['ordonare']) && $_GET['ordonare'] == "nume_asc" ){
           echo 'selected="selected"' ;
        }
        ?>
        >nume tara ascendent</option>


        <option  value="nume_desc"  <?php
        if(isset($_GET['ordonare']) && $_GET['ordonare'] == "nume_desc" ){
           echo 'selected="selected"' ;
        }
        ?>
        >nume tara descendent</option>


        <option  value="pib_asc" <?php
        if(isset($_GET['ordonare']) && $_GET['ordonare'] == "pib_asc" ){
           echo 'selected="selected"' ;
        }
        ?>
        >valoare pib ascendent</option>


        <option  value="pib_desc" <?php
        if(isset($_GET['ordonare']) && $_GET['ordonare'] == "pib_desc" ){
           echo 'selected="selected"' ;
        }
        ?>
        >valoare pib descendent</option>

    </select>

    <input type="submit" value="ordoneaza" name="afiseaza" />
</form>
<p>Avand array-ul de mai sus cu tarile si pib-ul lor afisati mai jos o lista in functie de ordonarea aleasa din formular</p>

<p>Exemplu:<br/>
    - daca s-a ales ordonare crescatoare dupa nume, rezultatul va fi:
</p>
<ol>
    <li> China (12.238)</li>
    <li> Germania (3.693)</li>
    <li> India (2.651)</li>
    <li> Japonia (4.872)</li>
    <li> SUA (19.485)</li>
</ol>



<hr>


<?php

if(isset($_GET['afiseaza'])){

    echo '<h1 style="font-size:1.5rem ; color:green">valoarea selectata este :' . $_GET['ordonare'] . '</h1>' ; 

    if($_GET['ordonare'] === "nume_asc"){
        ksort($tari);
    }elseif($_GET['ordonare'] === "nume_desc"){
        krsort($tari);
    }elseif($_GET['ordonare'] === "pib_asc"){
        asort($tari);
    }elseif($_GET['ordonare'] === "pib_desc"){
        arsort($tari);
    }else{
        echo "big problem if" ;
    }

 

    foreach($tari as $taraKey => $taraVal){
    
        echo '<h1 style="font-size:1.5rem ; color:orange">' . $taraKey . ' (' . $taraVal .' ) </h1' . '<br>' ;
    
    }

}


//valoarea selectata anterior de catre user ramane selectata cu selected="selected" pe tag-ul option


?>





<hr>


<?php 

echo '<h1 style="font-size:1.5rem ; color:yellowgreen">valoarea selectata este :' . $_GET['ordonare'] . '</h1>' ; 

   // v2
   switch($_GET['ordonare']){
    case 'nume_asc': ksort($tari);
    break;
    case 'nume_desc': krsort($tari);
    break;
    case 'pib_asc': asort($tari);
    break;
    case 'pib_desc': arsort($tari);
    break;
    default: echo 'big problem switch';
}
// end v2


foreach($tari as $taraKey => $taraVal){
    
    echo '<h1 style="font-size:1.5rem ; color:tomato">' . $taraKey . ' (' . $taraVal .' ) </h1' . '<br>' ;

}


?>