<?php 
//PHP Programming Language Tutorial - Full Course
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php free code camp</title>
</head>
<body>
    
<?php 

echo ("Hello world 1 ! <br></br>") ;
echo "Hello world 2 ! <br>" ;
echo 56 ;
echo '<h1>This is my site . </h1>' ;
echo 56.89 ;
echo '<hr>' ;
echo '<p>This is my site . </p>' ;

echo '<h1 style="text-align:center">variables</h1>' ;

$characterName="Mihai";
$characterAge=35;

echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";

$characterName="Costica";
$characterAge=$characterAge + 5;
echo "He really liked the name $characterName <br>";
echo "But didn't like being $characterAge <br>";

?>

<?php
echo '<h1 style="text-align:center">data types</h1>' ;

$phrase="to be or not to be";

//whole numbers/intigers/30 and decimal numbers/floating point number/56.789
$age=45 ;

//operator boolean
$isMale=true ;
$isFemale=false ;

//null=no value 

?>


<?php

echo '<h1 style="text-align:center">working with strings</h1>' ;

echo "my string <br>";
$phraseSec="this is my string in a variable";
echo $phraseSec . '<br>' ;

$phraseThird="Mircea cel Batran a fost domnitorul Tarii Romanesti . <br>";
echo strtolower($phraseThird);

$phraseThird="Ana are mere si pere . <br>";
echo strtoupper($phraseThird);

echo strtoupper("mihaela gabriela");

echo '<h1> Numele meu este ' . strtoupper('mihai gabriel aco') . '.</h1>' ;
echo '<h3>My name has ' . strlen("Mihaela Gabriela") . 'letters / length of string</h3>' ; 

$myString="Mih Gab";
echo '<h1>prima litera den variabila string este cea cu index-ul 0 :' . $myString[0] . '</h1>' ;
echo '<h1>a treia litera den variabila string este cea cu index-ul 0 :' . $myString[2] . '</h1>' ;

echo "Alexandru"[0];
echo "Alexandru"[1];
echo "Alexandru"[2];
echo "Alexandru"[3];



$tutString="Giraffe Academy" ;
echo '<h1>first tutorial string is :' . $tutString .  '</h1>' ;
$tutString[0]="T";
echo '<h1>second tutorial string is :' . $tutString .  '</h1>' ;

$nameBrother="Alexandru Aco" ;
echo '<h1 style="color:red">first numele fratelui meu este :'  . $nameBrother .  '.</h1>' ;

$changedName=str_replace( "Alexandru" , "Alin" ,  $nameBrother);

echo '<h1 style="color:green">second numele fratelui meu este :'  . $changedName .  '.</h1>' ;

echo '<h1 style="color:green">second numele fratelui meu este :'  . str_replace( "Alexandru" , "Alin" ,  $nameBrother) .  '.</h1>' ;

$motherName="Cornelia Hutupasu" ;
echo '<h1>name of mother is :' . $motherName . '. </h1>' ;
echo '<h1>changed name of mother is :' . substr($motherName , 9) . '. </h1>' ;
echo '<h1>changed name of mother is :' . substr($motherName , 9 , 4) . '. </h1>' ;

?>


<?php

echo '<h1 style="text-align:center ; color:blue">working with numbers</h1>' ;

//operatorul modulo 

echo 10 % 3 ; 
echo '<h1>operatorul modulo afiseaza the remainder / rest :' . 100 % 3 . '</h1>' ;

echo 4 + 5 * 10 ;
echo '<h1>ordinea operatiilor aritmetice : ' . 4 + 5 * 10 . '</h1>' ;

$num1 = 10 ;
$num2 = 100 ;
echo $num1 + $num2 + 5;
echo '<h1>adunara cu variabile ' . $num1 + $num2 + 5 . '</h1>' ;

$num3=1000;
$num3++;
echo $num3;
echo '<h1>adding 1 by ++ to num3 variable :' . $num3++ . '</h1>' ; 

echo abs(-120.78) . '<br>';
echo pow(2 , 4) . '<br>';
echo sqrt(144) . '<br>';
echo sqrt(16) . '<br>';

echo max(123 , 234) . '<br>' ;
echo min(-56 , -89) . '<br>' ;


echo round(3.2) . '<br>'  ;
echo round(3.7) . '<br>'  ;
echo round(3.5555) . '<br>'  ;

echo ceil(3.12) . '<br>'  ;
echo floor(3.82) . '<br>'  ;


?>

<hr>

            <form action="site.php" method="get">

            <label for="name">write your name<br>
            <input type="text" name="name" id="name" placeholder="your name"/>
            </label><br>


            <label for="nr1">write your nr1<br>
            <input type="number" name="nr1" id="nr1" placeholder="your nr1"/>
            </label><br>

            <label for="nr2">write your nr2<br>
            <input type="number" name="nr2" id="nr2" placeholder="your nr2"/>
            </label><br>


            <input type="submit" />


            </form>



            <?php

echo '<h1 style="text-align:center ; color:green">getting user input</h1>' ;

echo $_GET["name"] ;
echo '<h1 style="color:olive ; text-align:center"> the name of user is :' . $_GET["name"] . '</h1>' ; 

            ?>

            <h1 style="color:DarkTurquoise ; text-align:center">your name is : <?php echo  $_GET["name"]  ?> </h1>

<hr>



<?php 

echo '<h1 style="text-align:center ; color:magenta">building a basic calculator</h1>' ;

echo $_GET["nr1"] .'<br>' ;
echo $_GET['nr2'] . '<br>';

echo '<h1 style="color:magenta ; text-align:center">sum of your numbers is :' . $_GET["nr1"] +  $_GET["nr2"] . '</h1>' ;
?>






</body>
</html>