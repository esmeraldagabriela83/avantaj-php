<?php

echo 'hello from 02_variables.php';
echo 'Get on the next line , with br tag <br>';

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/



$name1='Mihaela';

echo $name1;
echo 'Get on the next line , with br tag <br>';

$name2='Gabriela';
print $name2;
echo 'Get on the next line , with br tag <br>';

$age=39;
echo $age;
echo 'Get on the next line , with br tag <br>';

$has_kids=true;
echo $has_kids;
var_dump($has_kids);

echo 'Get on the next line , with br tag <br>';

$cash_on_hand=30.65;//Float nr cu zecimale
var_dump($cash_on_hand);

echo 'Get on the next line , with br tag <br>';

echo $cash_on_hand;

echo 'Get on the next line , with br tag <br>';

echo '$name1 is $age years old .';

echo 'Get on the next line , with br tag <br>';

//CONCATENATION IN PHP

echo $name1 . ' is ' . $age . 'years old .';
echo $name2 . ' is ' . $age . 'years old .';

echo 'Get on the next line , with br tag <br>';

echo "$name1 is $age years old . ";

echo 'Get on the next line , with br tag <br>';

//----------------------------------------------------------------------------------------------more friendly with me // just like JS

echo "${name2} is ${age} years old .";

echo 'Get result of 5 + 50 , with br tag <br>';
echo 5 + 50;

echo 'Get result of "500" + 50 , with br tag <br>';
echo "500" + 50;

echo 'Get result of "50" + "30" , with br tag <br>';
echo "50" + "30";

echo 'Get x variable , with br tag <br>';
$x='4' + '3';
echo $x;
var_dump($x);

echo 'Get 100 -73 , with br tag <br>';
echo 100 -73;

echo 'Get 7*7 , with br tag <br>';
echo 7 * 7;

echo 'Get $x*1000 , with br tag <br>';
echo $x * 1000;

echo 'Get the remainder / modulo / the rest of 3 from 10 , with br tag <br>';
echo 10 % 3;

// Constants - Cannot be changed
//define pt a defini Constants

define('HOST' , 'localhost');
echo 'show HOST , with br tag <br>';
echo HOST;

define('DB_NAME' , 'dev_db');
echo 'show DB_NAME , with br tag <br>';
echo DB_NAME;

?>