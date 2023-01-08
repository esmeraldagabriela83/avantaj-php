<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:red">functions</h1>' ;


function sayHi(){

    echo "Hello User" ;

}

//apel functie
sayHi();

?>




<?php

function saySalut(){
    echo '<h1 style="color:skyblue ; text-align:center"> SALUT USER </h1>' ;
}

//apel functie
saySalut();

?>



<?php

function saYlUser($userParam){
    echo '<h1 style="color:magenta ; text-align:center"> Salut ' . $userParam . '. Ce mai faci ?</h1>' ;
}

//apel functie
saySalut("Andreea");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi User from input</title>
</head>
<body>

<form action="functions.php" method="post">

<label for="userName">write your name:</label><br>
<input type="text" name="name" id="userName" value="<?php
//ca sa ramana ultimul nume scris de user in input
if(isset($_POST["name"])){
     echo $_POST["name"] ;
}
?>" /><br>


<label>write your age:<br>
<input type="number" name="age" value="<?php
//ca sa ramana ultima varsta scrisa de user in input
if(isset($_POST["age"])){
     echo $_POST["age"] ;
}
?>" />
</label><br>
    


<input type="submit" name="submit"/>

</form>

</body>
</html>


<?php

//-------------------------------------------------------------------------------------------------------

//functie cu 2 parametri

function showNameAndAge($paramName , $paramAge){
    echo '<h1 style="color:indigo ; text-align:center">person ' . $paramName . ' is ' . $paramAge . ' years old . </h1>' ;
}

//functie cu return // return statements

function modifyAge($paramAge){
return $paramAge - 10 ;
}

//-------------------------------------verifica daca se trimite formularul cu numele submit------------------------------------------------------------------

if( isset($_POST['submit']) ){

    echo '<h1 style="color:crimson ; text-align:center">Your name is: '  . $_POST["name"] . '</h1>' ; 

    echo saylUser($_POST["name"]) ;

    echo showNameAndAge($_POST['name'] , $_POST['age']) ;

    echo '<h1 style="color:deeppink ; text-align:center">' . $_POST["name"] . ' is 10 years younger because of a function: ' . modifyAge($_POST["age"]) . '.</h1>' ; 

}

?>

<?php


function bunaZiua($userName){

     echo '<h3 style="color:DarkSlateBlue ; text-align:center">Buna ziua ' . $userName . '! Ce faci in weekend ? </h3>' ;

     echo "buna $userName . Ce program ai astazi ? ";
    
}

//apel functie

bunaZiua("Gigel") ;
bunaZiua("Costel") ;
bunaZiua("Ana Maria") ;

showNameAndAge("Marcel" , 89) ;
showNameAndAge("Adelina" , 54) ;
showNameAndAge("Costica" , 19) ;

?>