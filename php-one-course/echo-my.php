
<?php
$x=78;
$y=123;

$string="my string is this";



echo $x."hello everybody"; //comment concatenare

echo '<img src="https://images.pexels.com/photos/14071176/pexels-photo-14071176.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="my php second img" style="width:20% ; border:"3px solid red" />';

echo "<h1>my title h1 from php </h1>";

echo "<h1>curs 2 25 11 2022 </h1>";


$an=2021;

if($an > 2019 && $an < 2022){
echo '<h1>'.$an . "an de pandemie </h1>";
}elseif($an > 1901 && $an <1905){
    echo '<h1>'. $an . " foamete </h1>";
}else{
    echo '<h1>'. $an . " libertate </h1>";
}


//-----------ex if----------------------------------------------

   $x = 16;
    $y = 5;
    $operator = '.'; // -, / , * , %, .
    
    if($operator == '+') {
        echo $x + $y;
    } elseif ($operator == '-') {
        echo $x - $y;
    } elseif ($operator == '/') {
        echo $x / $y;
    } elseif ($operator == '*') {
        echo $x * $y;
    } elseif ($operator == '%') {
        echo $x % $y;
    } elseif ($operator == '.') {
        echo $x . $y;
    } else {
        echo 'operatorul trebuie sa fie +,-,/,*,% sau .';
    }



    //-----------ex switch----------------------------------------------


    $a=13;
    $b=2.5;
    $op=".";

    switch($op){

        case '+' : echo '<h1 style="color:magenta">sum is : '.($a + $b). "</h1>";
        break;

        case '-' : echo '<h1 style="color:yellowgreen">diferenta is : '.($a - $b). "</h1>";
        break;

        case '*' : echo '<h1 style="color:olive">inmultire is : '.($a * $b). "</h1>";
        break;

        
        case '/' : echo '<h1 style="color:red">impartire is : '.($a / $b). "</h1>";
        break;

        case '.' : echo '<h1 style="color:cyan">concatenare is : '. (floatval($a . $b) + 5000) . "</h1>";
        break;

        default:
        echo '<h3 style="color:cornflowerblue">acest operator <em>nu exista</em></h3>';


    }

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }




    //-----------ex if moneda -----------------------------------------curs 2-----
   
$moneda="stema"; // "stema // " altceva ..........."


if($moneda == "ban"){
    echo '<h3 style="color:green">you won</h3>';
}elseif($moneda == "stema"){
    echo '<h3 style="color:red">you lost</h3>';
}else{
    echo '<h3 style="color:blue">not a coin , must be something else' .$moneda . '</h3>';
}


    //-----------ex switch moneda -------------------------------------curs 2---------



    switch ($moneda) {
        case 'ban': echo '<h1 style="color:yellowgreen">' . 'good value is : ' .$moneda . "</h1>";
        break;
        
        
        case 'stema': echo '<h1 style="color:crimson">' . 'wrong value is : ' .$moneda . "</h1>";
        break;
    
        default: echo '<h3 style="color:darkmagenta">' . 'your strange value is : ' .$moneda . '</h3>';

    }



?>
<br/>
<img src="https://images.pexels.com/photos/14495343/pexels-photo-14495343.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="my php img" style="width:20% ; border:"3px solid red" />
<h3>my title h3 from html </h3>




<?php

//----------- for pt afisare----------------------------------------------


$xArrFructe=array("mere" , "pere" , "nuci" , "alune" , "portocale");

    
echo '<ul style="color:forestgreen">';
for($index=0 ; $index < count($xArrFructe) ; $index ++ ){


echo '<li style="color:orange">each fruit is : ' . '<span style="background-color:yellowgreen ; font-size:1.5rem ; color: crimson">'  . $xArrFructe[$index]  . '</span>' . '</li>' ;

}
echo '</ul>';


//----------- for pt afisare cu culori----------------------------------------------

$xArrNr=array(11 , 22 , 33 , 44 , 55);

$xArrColors=array("BlueViolet" , "DarkKhaki " , "DarkTurquoise" , "HotPink " , "LightSalmon");

echo '<ul>';

for($index=0 ; $index < count($xArrNr) ; $index ++){


echo ' <li style="text-align:center ; font-size:2.5rem ; color:' . $xArrColors[$index] . ' ; background-color:LemonChiffon ; margin:0.5em 0">' . $xArrNr[$index] . '</li>' ;

}

echo '</ul>';




//----------- for pt afisare cu culori----------------------------------------------

$xArrAfisare=array("string1" , "string2" , "string3" , "string4" , "string5");

$xArrColors2=array("BlueViolet" , "DarkKhaki " , "DarkTurquoise" , "HotPink " , "LightSalmon");

echo '<ul>';

for($index=0 ; $index < count($xArrNr) ; $index ++){


echo ' <li style="text-align:center ; font-size:2rem ; color:' . $xArrColors2[$index] . ' ; background-color:PaleTurquoise ; margin:0.5em 0">' . $xArrNr[$index] . '</li>' ;

}

echo '</ul>';




?>


<?php 

//----------- for pt sum----------------------------------------------

$xArrNrSec=array(1 , 2 , 3 , 4 , 5);

$titleColor="teal";

$sum=0;

for($index=0 ; $index < count($xArrNrSec) ; $index ++){

    $sum=$sum + $xArrNrSec[$index] ;

}

echo '<h1 style="text-align:center ; background-color:Thistle ; color: ' . $titleColor. ' ">sum is :' . $sum . ' </h1>' ;


//----------- for pt each nr add 5000-------------------------------------------------------------------------------------------------------------------------------------------------------

$xArrNrThird=array(100 , 200 , 300 , 400 , 500);

$addedNr=5000;



for($index=0 ; $index < count($xArrNrThird) ; $index ++){

    $xArrNrThird[$index] = $xArrNrThird[$index] +  $addedNr ;

}

//------------
$xArrColors3=array("red" , "green " , "blue" , "gold " , "olive");

echo '<ul>';

for($index=0 ; $index < count($xArrNrThird) ; $index++ ){

echo  '<li style="text-align:center ; color:' . $xArrColors3[$index] .  ' ; padding:0.5em ; font-size:1.5rem">'  . $xArrNrThird[$index] . '</li>'  ;

}

echo '</ul>';

?>


<?php 

//-------------------curs 2 o alta forma de a scrie array--------------------------------------------------------------------------------------------------

$arrayStrings=array(
    0 => "My string 1",
    1 => "My string 2",
    2 => "My string 3",
    3 => "My string 4",
    4 => "My string 5",
);

echo  '<h1 style="color:green">elements of array are :' . implode(" , " , $arrayStrings) . '</h1>'  ;

echo  '<h1 style="color:blue">elements of array are :' . implode(" + " , $arrayStrings) . '</h1>'  ;

echo  '<h1 style="color:plum">elements of array are :' . implode(" x " , $arrayStrings) . '</h1>'  ;


//-----------------

$arrText=array("Ana" , "are" , "mere" , "si" , "merge" , "la" , "scoala .");


echo  '<h1 style="text-align:center ; color:tomato">elements of array are : <em>' . implode("   " , $arrText) . '</em></h1>'  ;

//-----------------

$arrJS=["Gigel" , "conduce " , "o" , "masina ."] ;

echo  '<h1 style="text-align:center ; color:YellowGreen">elements of array are : <em>' . implode("   " , $arrJS) . '</em></h1>'  ;

?>



<?php 

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

//--------------

$str1 = 'one,two,three,four';

// zero limit
print_r(explode(',',$str1,0));

echo  '<h1 style="text-align:center ; color:YellowGreen">explode : <em>' . print_r(explode(',',$str1,0)) . '</em></h1>'  ;

// positive limit
print_r(explode(',',$str1,2));

echo  '<h1 style="text-align:center ; color:YellowGreen">explode : <em>' . print_r(explode(',',$str1,2)) . '</em></h1>'  ;

// negative limit
print_r(explode(',',$str1,-1));

echo  '<h1 style="text-align:center ; color:YellowGreen">explode : <em>' . print_r(explode(',',$str1,-1)) . '</em></h1>'  ;

?>