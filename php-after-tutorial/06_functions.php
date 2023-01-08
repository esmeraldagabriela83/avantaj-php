<?php 

echo '<h1> this is 06_functions.php </h1>' ;


/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/


function registerUser(){

echo '<h3 style="color:tomato ; background-color:yellowgreen">User registered</h3>' ;

}

//-apel functie pt afisare in ecran

registerUser();

//----------------------

$xNr=7;
$yNr=33;

function myAdd(){
    global $xNr ;
    global $yNr ;

echo '<h1>my added sum is :' . $xNr +  $yNr . '</h1>' ;

}

//-----apel functie pt afisare------------

myAdd();





//-----------------add nr to each el nr of arr-------for loop-----------------------------------------------------------------------------------------------------------------------

$nrToAdd=100;

$arrNrs=array(3 , 4 , 5 , 6 , 7) ;

//----------

function addNrTOeachArrEl($arr){

global $nrToAdd ;

echo '<ul>' ;

for($index=0 ; $index < count($arr) ; $index ++){

echo '<li style="color:magenta">el nr with variable is : ' . $arr[$index] + $nrToAdd .' </li>' ;

}

echo '</ul>' ;


}

//-----apel functie------

addNrTOeachArrEl($arrNrs)

?>


<?php 

//-----------------add nr to each el nr of arr-------foreach ----------------------------------------------------------------------------------------------------------------------

$backgroundColor="Beige";

$colorsForNr=array("RoyalBlue" , "SeaGreen" , "peru" , "PaleVioletRed" , "Maroon" , "indigo");


$nrAdd=1000;

$arrOfNrs=array(22 , 33 , 44 , 55 , 66 , 77) ;

function addParamToElArr($arr , $nr){
    global $backgroundColor;

    global $colorsForNr;

for($index=0 ; $index < count($arr) ; $index ++){

echo  '<h1 style="background-color:' . $backgroundColor . '; color:' . $colorsForNr[$index] . '; text-align:center">index ' . $index . ' el nr  with param variable added is :' . $arr[$index] + $nr . '</h1>'  ;

}


}

//-------apel functie ---------------------------------------

addParamToElArr($arrOfNrs , $nrAdd) ;


?>


<?php 

$colorEmail="DarkSeaGreen" ;
$colorEmailBackground="Bisque" ;

function registerUserEmail($email){
    global $colorEmail ;
    global $colorEmailBackground ;

echo '<h3 style="text-align:center ; background-color:' . $colorEmailBackground . '; color:' . $colorEmail . '; padding:0.5em 0 ; margin:0.5em 0 ">' . $email . ' is registered . </h3>' ;

}

//----------- apel functie -----------------------------------


registerUserEmail('gigel@yahoo.com');
registerUserEmail('alex@yahoo.com');
registerUserEmail('mary@yahoo.com');


?>

<?php 


function sum($n1 , $n2){

return $n1 + $n2 ;

}
//-------------apel functie pt afisare pe ecran-------------------

echo sum(6 , 4);

echo '<h1 style="color:magenta"> my sum is :' . sum(66 , 44) . '.</h1>' ;
echo '<h1 style="color:green ; text-align:center"> my sum is :' . sum(66 , 44) . '.</h1>' ;

?>



<?php 

$colorDecrease="DarkBlue" ;
$backgroundColorDecrease="Aquamarine" ;


function decrease($n1 , $n2){

    global $colorDecrease ;
    global $backgroundColorDecrease ;

return $n1 - $n2 ;

}

$decreaseNr=decrease(100 , 70) ;

echo '<h1 style="font-size:1.5rem ; color:' . $colorDecrease . '; background-color:' . $backgroundColorDecrease . '">  decrease nr is :' . $decreaseNr . '</h1>' ;

echo '<h1 style="font-size:1.5rem ; color:' . $colorDecrease . '; background-color:' . $backgroundColorDecrease . '">  decrease nr is :' . decrease(10 , 7) . '</h1>' ;

?>



<?php 


$fontSize="1.5rem" ;

$color="darkmagenta" ;

function multiply($n1=40 , $n2=50){

return $n1 * $n2;

}

$multiplyNr=multiply() ;

echo '<h1 style="text-align:center ; color:' . $color . '; font-size:' . $fontSize . '; background-color: Cornsilk "> multiply nr is :' . $multiplyNr . '</h1>' ;


?>


<?php 

//-------------functia anonima---------------------

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
    return $num1 + $num2;
  };
  
  echo $add(55, 505);

  echo '<h1 style="text-align:center ; color:red"> ' . $add(33, 303) . '</h1>' ; 


//-----------------------------------------------------------------------------------------------------------------------------

$subtract=function($nr1 , $nr2){

return $nr1 - $nr2 ;

};

echo $subtract(1033 , 33) ;

echo '<h1 style="text-align:center ; color:green">' . $subtract(5555 , 55) . '</h1>' ;


?>


<?php 

// ------------------------------------------------------------------------------------------------Arrow functions----------------
$multiplyTutColor="indigo";
$multiplyTutBackgroundColor="yellow";


$multiplyTutorial = fn($num1, $num2) => $num1 * $num2;

echo $multiplyTutorial(5, 5);

echo '<h1 style="color:' . $multiplyTutColor . '; background-color:' . $multiplyTutBackgroundColor . '; font-size:1.5rem">' . $multiplyTutorial(5, 300) .  '</h1>' ;

?>