<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLparameters</title>
</head>
<body>


<form action="URLparameters.php" method="get">

<label for="name">write a name<br>
<input type="text" name="name" id="name"/>
</label><br>

<input type="submit" />

</form>






<?php 
echo '<h1 style="text-align:center ; color:dimgray">URL parameters / store values in the URL / for showing public information</h1>' ;

echo $_GET["name"] . '<br>' ;

//write age in the  URL

//http://localhost/php-tutorial2/URLparameters.php?name=micuPisicu&age=97

echo $_GET["age"] . '<br>'  ;

//http://localhost/php-tutorial2/URLparameters.php?name=micuPisicu&age=97&place=garden
echo $_GET["place"] . '<br>'  ;

?>


    
</body>
</html>