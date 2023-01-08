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
    <title>libs game</title>
</head>
<body>

<form action="libsGame.php" method="get">

<label for="color">write a color for roses<br>
<input type="text" name="color" id="color" placeholder="color"/>
</label><br>

<label for="pluralNoun">write type of flowers / plural noun<br>
<input type="text" name="pluralNoun" id="pluralNoun" placeholder="plural noun"/>
</label><br>

<label for="celebrity">write celebrity name<br>
<input type="text" name="celebrity" id="celebrity" placeholder="celebrity name"/>
</label><br>

<input type="submit" />

</form>



<?php

echo '<h1 style="text-align:center ; color:orange">building a libs game</h1>' ;

echo $_GET["color"] . '<br>' ;
$color = $_GET["color"] ;

echo $_GET["pluralNoun"] . '<br>' ;
$pluralNoun = $_GET["pluralNoun"] ;

echo $_GET["celebrity"] . '<br>' ;
$celebrity = $_GET["celebrity"] ;

echo '<h1 style = "color:' . $color . '">Roses have ' . $color . ' color , which is your typed color . </h1>' ;

echo "Roses are $color <br>" ;
echo "$pluralNoun are blue <br>" ;
echo "I love $celebrity <br>" ;

?>



    
</body>
</html>