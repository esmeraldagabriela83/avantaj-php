<?php

echo '<h1 style="color:orange ; text-align:center">hello from 14_file_handling.php</h1>' ;

$file = 'extras/users.txt';


if(file_exists($file)) {
  // Returns the content and number of bytes read from the file on success, or FALSE on failure.
  echo readfile('extras/users.txt') . '<br>' ;


$handle=fopen($file , 'r') ;

$contents=fread($handle , filesize($file)) ;

fclose($handle) ;

echo $contents;

echo '<h1 style="color:orange ; text-align:center">persons from users.txt : ' . $contents . '</h1>'  ;


} else {
    // Create the file
    $handle = fopen($file, 'w');
    // PHP_EOL is a constant that represents the end of line character.
    $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John';
    // fwrite() writes the contents to the file and returns the number of bytes written on success, or FALSE on failure.
    fwrite($handle, $contents);
    fclose($handle);
  }



/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/


?>