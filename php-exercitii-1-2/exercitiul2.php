<?php
    $gender = 'm'; // m sau f
    $varsta = 5; // ani

?>

<p>Avand variabila $gender, verificati daca este m (masculin) sau f (feminin) si:<br/>
- daca este m verificati:<br/>
   &nbsp; &nbsp; - daca varsta este mai mica de 18 si afisati baiat<br/>
   &nbsp; &nbsp; - daca varsta este cel putin  18 si afisati barbat<br/>
- daca este f verificati:<br/>
   &nbsp; &nbsp; - daca varsta este mai mica de 18 si afisati fata<br/>
   &nbsp; &nbsp; - daca varsta este cel putin  18 si afisati femeie<br/>




  



   <?php 

echo "my try";
   
   echo '<h1 style="color:gray ; text-align:center"> Genul este: <em> ' . $gender . ' </em> iar  varsta este <em> ' . $varsta . ' </em> </h1>' ;
   

if($gender == 'm' && $varsta >= 18){

echo '<h1 style="color:blue ; text-align:center"> barbat</h1>' ;

}elseif($gender == 'm' && $varsta < 18){

   echo '<h1 style="color:DeepSkyBlue ; text-align:center"> baiat</h1>' ;

}elseif($gender == 'f' && $varsta >= 18){

   echo '<h1 style="color:red ; text-align:center"> femeie</h1>' ;

}elseif($gender == 'f' && $varsta < 18){

   echo '<h1 style="color:pink ; text-align:center"> fata</h1>' ;

}else{
   echo '<h1 style="color:olive ; text-align:center">sanatate oricine ai fi</h1>' ;
}


   ?>



<?php 

//--------------if cu operator ternar

if($gender == 'm'){

   echo $varsta >= 18 ? 'barbat' : 'baiat' ; 
   //------
   echo $varsta >= 18 ? '<h1 style="color:blue ; text-align:center"> BARBAT</h1>' : '<h1 style="color:DeepSkyBlue ; text-align:center"> BAIAT</h1>' ;

}elseif($gender == 'f'){

   echo $varsta >= 18 ? 'FEMEIE' : 'FATA' ; 
   //--------------
   if($varsta >= 18){

      echo '<h1 style="color:red ; text-align:center">FEMEIE</h1>' ;

   }elseif($varsta < 18){

      echo '<h1 style="color:pink ; text-align:center">FATA</h1>' ;

   }

}
else{
   echo '<h1 style="color:olive ; text-align:center">sanatate oricine ai fi</h1>' ;
}


?>