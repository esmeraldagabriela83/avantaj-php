<?php  
    $persoane = array(
        array(
            'nume' => 'Persoana 1',
            'venit' => 1300,    // euro
            'cheltuieli' => 65  // % din venit
        ),
        array(
            'nume' => 'Persoana 2',
            'venit' => 2000,    // euro
            'cheltuieli' => 72  // % din venit
        ),
        array(
            'nume' => 'Persoana 3',
            'venit' => 1000,    // euro
            'cheltuieli' => 68  // % din venit
        ),
        array(
            'nume' => 'Persoana 4',
            'venit' => 1100,    // euro
            'cheltuieli' => 85  // % din venit
        ),
        array(
            'nume' => 'Persoana 5',
            'venit' => 2400,    // euro
            'cheltuieli' => 80  // % din venit
        ),
    );

?>
<p> Avand array-ul de mai sus (din cod) afisati pe randuri diferite doar persoanele care au profit de peste 400 euro. Profitul fiind calculat ca % din venit ramas dupa cheltuieli. <br/>
Ex: Persoana 1 are venit de  1300 din care ii raman 35% dupa cheltuieli rezultatnd o valoare de 455<br/>
    Rezultatul dorit:<br/>
         Persoana 1 - 455<br/>
         Persoana 2 - 560<br/>
         Persoana 5 - 480<br/>

</p>


<?php 



foreach($persoane as $persoanaEl => $persoanaValue){

    $cheltuieliEuro=($persoanaValue['venit'] * $persoanaValue['cheltuieli'])/100 ;

    $profit= $persoanaValue['venit'] - $cheltuieliEuro ;


    echo '<h3>cheltuieli in euro reprezinta : ' . $cheltuieliEuro . '</h3>' ;

    echo '<h3>profit reprezinta : ' . $profit . '</h3>' ;



if( $profit > 450 ){
    echo  '<h1 style="color:green">' . $persoanaValue['nume'] . ' - ' . $profit . '</h1>' ;
}else{
    echo  '<h1 style="color:red">' . $persoanaValue['nume'] . ' - ' . $profit . '</h1>' ;
}

}

?>

