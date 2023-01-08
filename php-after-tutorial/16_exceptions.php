<?php

echo '<h1 style="color:LightSalmon ; text-align:center">hello from errors and exceptions / from 16_exceptions.php</h1>' ;

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x){

if(!$x){

throw new Exception('Division by zero <br>' );

}

return 1/$x ;

}

echo inverse(10);

echo '<h1 style="color:green ; text-align:center">result of inverse function is :'  . inverse(10) .  '</h1>' ;

echo inverse(500);

echo '<h1 style="color:green ; text-align:center">result of inverse function is :'  . inverse(950) .  '</h1>' ;


try{

    echo inverse(5) .' <br>' ;
    echo inverse(0);

}catch(Exception $e){

echo 'Caught Exception <br>' , $e-> getMessage() , ' ' ;

}finally{

echo 'First finally' . '<br>' ;

}

//-----------------------------another try


try{

    echo inverse(0);

}catch(Exception $e){

echo 'Caught Exception <br>' , $e-> getMessage() , ' ' ;

}finally{

echo 'Second finally' . '<br>' ;

}

echo  '<h1 style="color:purple ; text-align:center">my hello world</h1>' ;



?>