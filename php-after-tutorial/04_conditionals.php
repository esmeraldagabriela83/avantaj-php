<?php 

echo 'hello from 04_conditionals.php';
echo 'Get on the next line , with br tag <br>';

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/


$age=20;

if($age >= 18){
echo '<h3>you are old enough to vote</h3>';
}else{
    echo '<h3>you not are old enough to vote</h3>';
}

echo '<h2>Get the current hour , with br tag <h2>';

$t=date("H");

echo  '<h2>' . $t . '</h2>';

echo '<h1>Get Howdy depending on day hour , with br tag </h1>';

if($t < 12){
echo '<h3>Good morning</h3>';
}elseif($t < 17){
    echo '<h3>Good afternoon</h3>';
}else{
    echo '<h3>Good evening</h3>';
}


echo 'Get on the next line , with br tag <br>';

if(true){
    echo 123;
}

echo 'use empty function , with br tag <br>';


$posts=['First Post'];

if(!empty($posts)){
echo '<h1>' . $posts[0] .  '</h1>' ;
}else{
    echo '<h1>No Posts</h1>';
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


echo '<h1>use empty function and ternary operator , with br tag </h1>';

echo !empty($posts) ?  $posts[0]  : "No Posts";

//----------- Ternary Operator cu afisare in pagina--------
$noPosts="No posts";

$firstPost=!empty($posts) ? $posts[0] : $noPosts;

echo  '<h1 style="color:cyan">' . $firstPost . '</h1>'  ;

//--------------------
$seconsPosts=!empty($posts) ? $posts[0] : null ;

echo  '<h1 style="color:yellowgreen">' . $seconsPosts . '</h1>'  ;



var_dump($firstPost);

?>


<?php  

/* -------- Switch Statements ------- */
$favColor="red";

switch($favColor){

case 'red':
    echo '<h1 style="background-color:yellow ; padding:0.5em ; border:3px solid' . $favColor . '; color:' . $favColor . '"> your favorite color is :' . $favColor .' </h1> ';
    break;


    case 'blue':
        echo '<h1 style="background-color:yellow ; padding:0.5em ; border:3px solid' . $favColor . '; color:' . $favColor . '"> your favorite color is :' . $favColor .' </h1> ';
        break;

        case 'green':
            echo '<h1 style="background-color:yellow ; padding:0.5em ; border:3px solid' . $favColor . '; color:' . $favColor . '"> your favorite color is :' . $favColor .' </h1> ';
            break;  
            
    default:
    echo '<h1 style="background-color:yellow ; padding:0.5em ; border:3px solid' . $favColor . '; color:' . $favColor . '"> your favorite color is NOT :' . $favColor .' </h1> ';   

}







?>