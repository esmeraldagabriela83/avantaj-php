<?php 

echo '<h1 style="color:magenta">This is 07_array_functions.php</h1>' ;

/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/


$fruits = ['apple', 'banana', 'orange' , "zmeura" , "capsuni"];

//----------get array length

echo count($fruits);
echo '<h1 style="text-align:center ; color:tomato">length of fruits array is : <em>' . count($fruits) . ' </em> </h1>' ;

//---search a specific value of array

var_dump(in_array('apple' , $fruits));

var_dump(in_array('bananas' , $fruits));

//---add an element to the array

$fruits[]='icecream' ;

array_push($fruits , 'blueberry' , 'strawberry' , 'mango') ;

//----------adauga un el in fata celorlalte

array_unshift($fruits , "flowers" , "ciuperci") ;

//--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!---remove last el of array
array_pop($fruits) ;

//--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!---remove first el of array
array_shift($fruits) ;

print_r($fruits);


echo '<h1 style="text-align:center ; color:FireBrick">first el of arr fruits is :' . $fruits[count($fruits) - 9] . '</h1>' ;

echo '<h1 style="text-align:center ; color:indigo">last el of arr fruits is :' . $fruits[count($fruits) - 1] . '</h1>' ;


echo '<h1 style="text-align:center ; color:cornflowerblue">length of fruits array after adding elements is : <em>' . count($fruits) . ' </em> </h1>' ;

//--------------------------afisara in pagina------------------------------

function showArrFruits($arr){

echo '<h1 style="background-color:yellow ; text-align:center ; color:olive"> '. implode(" , " , $arr) .' </h1>' ;

}


//---apel functie

showArrFruits($fruits);

//-----------------------------------------------------------------------------------------------------------------------for loop inside function to show array elements

function showArrFruitsForLoop($arr){

echo '<ul>' ;

for($index=0 ; $index <count($arr) ; $index++){

echo '<li style="list-style:none ; font-size:1.5rem ; text-align:center ; color:DarkSlateGray">each el is :' . $arr[$index] . '</li>' ;

}

echo '</ul>' ;

}

//---apel functie pt afisare in pagina
showArrFruitsForLoop($fruits);

?>


<?php

$animalsArr=array("dog" , "cat" , "mouse" , "giraffe" , "snake") ;

echo count($animalsArr) ;

echo '<h1 style="color:green"> animals from array are :' . implode(" , " ,  $animalsArr) . '</h1>' ;

//------------indeparteaza un el anume din array


unset($animalsArr[3]) ;

echo count($animalsArr) ;

echo '<h1 style="color:blue"> animals after removing el with index 3 from array are :' . implode(" , " ,  $animalsArr) . '</h1>' ;

?>

<?php 

//--------------split an array into chunks

$catsArr=array("cat1" , "cat2" , "cat3" , "cat4" , "cat5" , "cat6") ;

echo '<h1 style="text-align:center ; color:bludeeppinke">my cats are :' . implode(" , " , $catsArr)  . '</h1>' ;


$myChunckedArr=array_chunk($catsArr , 2) ;

print_r($myChunckedArr) ; 

echo '<h1 style="text-align:center ; color:DarkSalmon">' . implode(" / " ,  $myChunckedArr) .' </h1>' ;

?>


<?php


// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];


$arr3=array_merge($arr1 , $arr2) ;

print_r($arr3) ;

echo '<h1 style="text-align:center ; color:FireBrick">' . implode(" , " ,  $arr3) . '</h1>' ;


//----------------------spread operator like [...arr]

$arr4=[...$arr1 , ...$arr1 , 7 , 8 , 9 , 10] ;

print_r($arr4) ;

echo '<h1 style="text-align:center ; color:Darkorange">' . implode(" , " ,  $arr4) . '</h1>' ;


?>


<?php 

//-------------combine function in php face un nou arr cu heys si values asociate una cu alta // like obj in js


$keys=["key1" , "key2" , "key3"] ;

$values=["value1" , "value2" , "value3"] ;

//---combine

$jsObj=array_combine($keys , $values) ;

print_r($jsObj) ;

echo '<h1 style="text-align:center ; color:DimGray">values are:' .  $jsObj['key1'] . ' , ' . $jsObj['key2'] . ' , ' . $jsObj['key3'] .' </h1> ';

?>

<?php 

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

print_r($c) ;

echo '<h1 style="text-align:center ; color:DimGray">values are:' .  $jc['green'] . ' , ' . $c['red'] . ' , ' . $c['yellow'] .' </h1> ';

//----get the keys from $c arr wich is in obj in js

$keysObj=array_keys($c) ;

print_r($keysObj) ;

//----get the values from $c arr wich is in obj in js



$valuesObj=array_values($c) ;

print_r($valuesObj) ;

echo '<p style="text-align:center ; font-size:1.5rem" > '. $valuesObj[0] . ' is ' . $keysObj[0] .  ' ,  <br> ' . $valuesObj[1] . ' is ' . $keysObj[1] . ' , <br> ' . $valuesObj[2] .  ' is ' . $keysObj[2]. '. </p>' ;

?>


<?php
//--------------flip inverseaza keys / proprietati cu values

$eu=array(
    'myName' => "Mih Gab" ,
    'mySurname' => "Aco" ,
    'myAge' => 39
) ;

print_r($eu);

echo '<h1 style="text-align:center">' . $eu['myName'] . " " . $eu['mySurname'] . ' has ' . $eu['myAge'] . ' years old. </h1> ';

$flippedEu=array_flip($eu);

print_r($flippedEu) ;

echo '<h1 style="text-align:center"> flipped $eu into $flippedEu </h1>' ;

echo '<h1 style="text-align:center">' . $flippedEu['Mih Gab'] . " " . $flippedEu['Aco'] . ' has ' . $flippedEu[39] . ' years old. </h1> ';

?>

<?php

//--------------------------------------------map foreach

$numbers=range(1 , 15) ;

print_r($numbers) ;

echo '<h1 style="color:olive ; text-align:center">' . implode(" " , $numbers) .  '</h1>' ;

//-----------map va intoarce tot un array inapoi

$newNumbers=array_map(function($number){

return 'Number is :' . $number  ;

} , $numbers) ;

print_r($newNumbers) ;

//-------------------

foreach($newNumbers as $newNr){

echo '<h1 style="color:olive ; text-align:center">new nr is : <em>  ' .  $newNr . ' </em> </h1>' ;

} ;


?>


<?php 

//--------------------------------------------filter foreach arrow function


$numbersSec=range(1 , 30);

print_r($numbersSec) ;

echo '<h1 style="color:cornflowerblue ; text-align:center">' . implode(" , " ,  $numbersSec) . '</h1>' ;

//--------------

$lessThan10=array_filter($numbersSec , fn($number) => $number <=10) ;

print_r($lessThan10) ;

foreach($lessThan10 as $eachNrLess10){

    echo '<h1 style="color:cornflowerblue ; text-align:center">new nr is : <em>  ' .  $eachNrLess10 . ' </em> </h1>' ;

}


?>



<?php 

//-------------------------------------------reduce arrow function

$numbersThird=range(1 , 5);

print_r($numbersThird) ;

echo '<h1 style="color:orangered ; text-align:center">' . implode(" " , $numbersThird) . '</h1>' ;

$sum=array_reduce($numbersThird , fn($carry , $number) => $carry + $number ) ;

var_dump($sum) ;


?>