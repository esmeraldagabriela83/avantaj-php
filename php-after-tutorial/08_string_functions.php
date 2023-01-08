<?php 

echo 'I am in 08_string_functions.php' ;


/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello Mihaela , how are you ?' ;

// Get the length of a string
echo strlen($string);

echo '<h1> Variabila string este :' .  $string . '</h1>'  ;

echo '<h1>Lungime a string-ului este :' . strlen($string) . ' </h1>'  ;

?>

<?php 


// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');



?>

<?php 

// Reverse a string
echo strrev($string);
echo '<h1>reversed string is : ' .  strrev($string) . '</h1>'  ;

?>


<?php

// Convert all characters to lowercase
echo strtolower($string);
echo '<h1 style="color:green">lowercase string is : <br>' . strtolower($string) . '</h1>'  ;

// Convert all characters to uppercase
echo strtoupper($string);
echo '<h1 style="color:blue">uppercase string is : <br>' . strtoupper($string) .  '</h1>'  ;

// Uppercase the first character of each word
echo ucwords($string);
echo '<h1 style="color:tomato">string with uppercase for the first character of each word : <br>' .  ucwords($string) .  ' </h1>'  ;


?>

<?php 


// String replace
echo str_replace('Mihaela', 'Everyone', $string);
echo '<h1 style="color:olive"> replace a word from a string: <br>' .  str_replace('Mihaela', 'Everyone', $string)  .  '</h1>' ;


?>


<?php 

$stringTutorial = 'Hello World';

// Return portion of a string specified by the offset and length
echo substr($stringTutorial, 0, 5);
echo substr($stringTutorial, 5);


?>


<?php 

// Starts with
if (str_starts_with($stringTutorial, 'Hello')) {
    echo 'YES';
  }
  
  // Ends with
  if (str_ends_with($stringTutorial, 'ld')) {
    echo 'YES';
  }

?>


<?php

// HTML Entities
$string2 = '<h1>Hello People</h1>';

echo htmlentities($string2);

echo '<h1 style="color:yellowgreen ; text-align:center">' . htmlentities($string2) . '</h1>'  ;

?>

<?php 

$string3 = '<h2 style="color:Chocolate ; text-align:center">this is string 3</h2>' ;

echo $string3 ;

echo htmlentities($string3);

?>

<?php

$string4 = '<script> alert("my alert text") </script>' ;
echo $string4 . '<br>' ;

echo htmlentities($string4) . '<br>' ;

?>


<?php

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy') . '<br>';
printf('1 + 1 = %f', 1 + 1) . '<br>'; // float

echo '<h1 style="color:DarkSlateGray ; text-align:center">' . printf('%s is a %s', 'Brad', 'nice guy') . '</h1>' ;

?>