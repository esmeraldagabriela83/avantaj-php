<?php 


echo' <h1>curs 3 my exercises</h1>' ;

$fructe = array("mere" , "pere" , "nuci") ;


for($i = 0 ; $i < count($fructe) ; $i ++ ){

echo '<h3 style="color:green"> each fruit :'  . $fructe[$i] . '</h3>' ;

}


?>

 
<?php 


echo' <h1>curs 3 my exercises</h1>' ;

$fructe = array("mere" , "pere" , "nuci") ;


foreach($fructe as $fruct){

echo '<h3 style="color:blue">each fruit is :' . $fruct .' </h3>' ;

}


?> 



<?php

$marci=array(

'Audi' => 26000 ,
'Mercedes' => 35000 ,
'BMV' => 30000 ,
'Dacia' => 12000 ,


) ;

echo '<p>parcurgere cu foreach si conditie if </p>' ;

foreach($marci as $marca){

if($marca < 30000 ){
echo '<h1 style="color:red">marca cu pret mai mic de 30000 este :' . $marca .   '</h1>' ;
}else{
    echo '<h1 style="color:green">marca cu pret mai mare de 30000 este :' . $marca .   '</h1>' ;
}

}


echo '<p>nu parcurgere cu for si conditie if </p>' ;

echo '<p> parcurgere cu foreach cu cheie si valoare // si conditie if </p>' ;


foreach($marci as $marca => $valuePret){

    if($valuePret < 30000 ){
        echo '<h1 style="color:red">marca cu pret mai mic de 30000 este :' . $marca . " cu pretul " . $valuePret .  '</h1>' ;
    }else{
        echo '<h1 style="color:green">marca cu pret mai mare de 30000 este :' . $marca . " cu pretul " . $valuePret .  '</h1>' ;
    }
    
}


foreach ($variable as $key => $value) {
    # code...
}

?>



<?php 

$people = array(

"Popescu" => 56 ,
"Ionescu" => 798 ,
"Aco" => 90 ,
"Filipescu" => 7 ,
"Marinescu" => 20 ,
"Hutupasu" => 6 ,
"Pop" => 38 ,
"Salavastru" => 3 ,

) ;

asort($people) ;

echo '<h3>ages are :' . implode(" , " , $people) . '</h3>' ; 

foreach ($people as $person => $age) {
  echo '<h1 style="text-align:center"> person ' . $person . ' is ' . $age . ' years old .   </h1>' ; 
}


foreach ($people as $person => $age) {
    

    if($age > 20){

echo '<h1 style="text-align:center ; color:green">person ' . $person . ' este peste 20 ani si are varsta  :' . $age .' </h1>' ; 

    }else{
        echo '<h1 style="text-align:center ; color:red">person ' . $person . ' este sub 20 ani si are varsta  :' . $age .' </h1>' ; 
    }


  }

?>