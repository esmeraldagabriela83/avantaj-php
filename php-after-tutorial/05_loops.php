<?php  

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

$colorsArr=array("RoyalBlue" , "SeaGreen" , "peru" , "PaleVioletRed" , "Maroon");


for($i=1 ; $i <= 4 ; $i ++){

echo '<h1 style="text-align:center ; color:' . $colorsArr[$i] . '; background-color:MistyRose "> i variable is :' . $i . '</h1>' ;

}

//-------------------

for($j=0 ; $j <= 5 ; $j ++){
echo  '<h3 style="color:indigo ; text-align:center">the nr is :' . $j . '</h3>' ;
}

//-----------------

for($x=5 ; $x<=10 ; $x ++){

echo 'Number ' . $x . '<br>' ;

}

?>



<?php  
echo '<hr>';

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$y=1;

while($y <= 15){

echo 'Number' . $y . '<br>' ;
//------------altfel se afiseaza in pagine fara sa se opreasca
$y++;

}

//------------------------

$z=7;

while($z <=15){

echo '<h2 style="text-align:center ; color:tomato">number is' . $z . '</h2>' ;
$z++;

}

//-----------------------

$q=15;

while($q <=20){

    echo '<h2 style="text-align:center ; color:yellowgreen">number is' . $q . '</h2>' ;
    $q = $q + 1;

}

?>



<?php 


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

$myDoLoop=7;

do {
    echo "Do While Loop : Number: $myDoLoop <br>";
    $myDoLoop++;
  } while ($myDoLoop <= 15);


?>

<?php  

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/


$posts = ['Post One', 'Post Two', 'Post Three' , 'Post Four' , 'Post Five'];

//-----------for loop-------------

for($index=0 ; $index < count($posts) ; $index ++){

echo '<h2 style="text-align:center ; color:deeppink">' . $posts[$index] . '</h2>';

}

//-----------while loop-------------

$myIndex=0;

while($myIndex < count($posts)){

    echo '<h2 style="text-align:center ; color:forestgreen">' . $posts[$myIndex] . '</h2>';
    $myIndex ++;

}

//--------------------------------------------------------------foreach-----------------------

//in php variabilile sunt case sensitive $ABC=90;

//in php FUNCTIILE nu sunt case sensitive ;

foreach($posts as $post){

echo '<h1 style="color:magenta"> each post from foreach function is :'  .$post  .  '</h1>' ;

};


//--------------------------------------------------------------foreach cu index-----------------------

foreach($posts as $index => $post){

echo $index . ' - ' . $post . '<br>' ;

}


//--------------------------------------------------------------foreach cu index-----------------------

$colorsForElements=array("gold" , "darkmagenta" , "orange" , "red" , "green");

foreach($posts as $index => $post){

    echo '<h1 style="text-align:center ; font-size:1.5rem ; color: ' . $colorsForElements[$index] . '" >' . $index .  ' is with element :' .  $post .  '</h1>' ;
    
    }
    

    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

echo '<h1 style="color:olive ; text-align:center">' . implode(" , " , $posts) . '</h1>' ;


    //-----------------------------array curs 2-------------

$myColorsFoStrings=array(
  0 => "CadetBlue",
  1 => "DarkGoldenRod",
  2 => "DarkSlateBlue",
  3 => "tomato",
);

//-------------

$myArrStrings=array(
  0 => "string1",
  1 => "string2",
  2 => "string3",
  3 => "string4",
);

echo '<h1 style="color:gray ; text-align:center">' . implode(" , " , $myArrStrings) . '</h1>' ;

echo '<ul>';

for($myIndex=0 ; $myIndex < count($myArrStrings) ; $myIndex ++){

echo '<li style="color:' . $myColorsFoStrings[$myIndex] . '; text-align:center" >each string is :'  . $myArrStrings[$myIndex] . '</li>' ;

}

echo '</ul>';

//--------------

foreach($myArrStrings as $myIndex => $myString){

echo '<h3 style="color:' . $myColorsFoStrings[$myIndex] . ' ; text-align:center ; font-size:1.5rem" >String ' . $myIndex . ' is ' . $myString .  '.</h3>' ; 

}

?>




<?php 

$arrOfArrays=[
  [
  0 => "string1",
  1 => "string2",
  2 => "string3",
  3 => "string4",
  ] ,
  [
    0 => "string5",
    1 => "string6",
    2 => "string7",
    3 => "string8",
    ]  ,
    [
      0 => "string9",
      1 => "string10",
      2 => "string11",
      3 => "string12",
      ] ,
      [
        0 => "string13",
        1 => "string14",
        2 => "string15",
        3 => "string16",
        ] 
] ;

//-------foreach--------------------------


foreach($arrOfArrays as $arrIndex => $arrArr){

echo '<p style="text-align:center ; font-size:1.5rem ; color:' . $myColorsFoStrings[$arrIndex] . '; background-color: Thistle ">  <em> String 1 is ' . $arrArr[0] . '</em> <br>  String 2 is ' . $arrArr[1] . '<br> <em> String 3 is ' . $arrArr[2] . '</em> <br>  String 4 is ' . $arrArr[3] .' <br> </p>' ; 

}

//-------for--------------------------


for($arrIndex=0 ; $arrIndex < count($arrOfArrays) ; $arrIndex++){

echo '<p style="background-color:MistyRose ; text-align:center ; font-size:1.5rem ; color:' . $myColorsFoStrings[$arrIndex] . '"> String 1 is ' . $arrOfArrays[$arrIndex][0] .' <br>  String 2 is '  . $arrOfArrays[$arrIndex][1] . '<br> String 3 is ' . $arrOfArrays[$arrIndex][2] .  '<br> String 4 is ' . $arrOfArrays[$arrIndex][3] . '<br> </p>' ;

}



?>

<?php

$myPerson = [
  'first_name' => 'Ovidiu',
  'last_name' => 'Sarban',
  'email' => 'ovidiuad@gmail.com',
];


echo '<h1 style="text-align: center ; color:blue">' . $myPerson['first_name'] . '</h1>' ;

echo '<h1 style="text-align: center ; color:cornflowerblue">' . $myPerson['last_name'] . '</h1>' ;

echo '<h3 style="color: olive">email address of person is :' . $myPerson['email'] . '. </h3>' ; 

echo '<h3 style="color: LightSlateGray"> Name ' . $myPerson['first_name'] . " " . $myPerson['last_name'] . ' has email address :' . $myPerson['email'] . '.</h3>' ;


//---------------array-uri asociative----------------------------------------------------------------



$myPeopleArr=[

[
  'first_name' => 'Ovidiu',
  'last_name' => 'Sarban',
  'email' => 'ovidiuad@gmail.com',
],
[
  'first_name' => 'Cosmin',
  'last_name' => 'Sarban',
  'email' => 'cosmin@gmail.com',
],
[
  'first_name' => 'Alexandru',
  'last_name' => 'Aco',
  'email' => 'alex@gmail.com',
],
[
  'first_name' => 'Mih Gab',
  'last_name' => 'Aco',
  'email' => 'esmeralda@gmail.com',
]

] ;

//------for loop----------------------



for($indexArrPerson=0 ; $indexArrPerson < count($myPeopleArr) ; $indexArrPerson++){

echo '<h3 style="font-size:1.5rem ; background-color:Beige ; text-align:center ; color: '. $myColorsFoStrings[$indexArrPerson] . '"> Person '. $myPeopleArr[$indexArrPerson]['first_name'] . " " . $myPeopleArr[$indexArrPerson]['last_name'] . ' has emaill address:' . $myPeopleArr[$indexArrPerson]['email'] . '.</h3>' ;

};


//------foreach----------------------

foreach($myPeopleArr as $indexArrPerson => $arrPerson){

echo '<h1 style="background-color:Cyan ; text-align:center ; color: '. $myColorsFoStrings[$indexArrPerson] . '"> Person ' . $indexArrPerson . ' is '  . $arrPerson['first_name'] . " " . $arrPerson['last_name'] .' and has email address:' . $arrPerson['email'] .  '.</h1>' ;

};


?>


<?php 

//-------------after tutorial------------------

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

//------------------

foreach($person as $key => $value){

echo "key : ${key} is :  ${value} <br>";

}

//------------------

foreach($person as $key => $value){

echo '<h1 style="color:darkmagenta">  key is :' . $key . ' and value is : ' . $value . '. </h1> ';

}


?>


