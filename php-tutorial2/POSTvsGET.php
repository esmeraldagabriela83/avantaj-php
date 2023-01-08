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
    <title>POST vs GET</title>
</head>
<body>


<form action="POSTvsGET.php" method="post">

<label for="name">write your name<br>
<input type="name" name="name" id="name"/>
</label><br>

<label for="password">write a password<br>
<input type="password" name="password" id="password"/>
</label><br>

<input type="submit" />


</form>




<?php 
echo '<h1 style="text-align:center ; color:magenta">POST vs GET</h1>' ;

echo $_POST["name"] . '<br>' ;
echo $_POST["password"] ;



?>

    
</body>
</html>