<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:Darkorange">while loop</h1>' ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loop php</title>
</head>
<body>
    
<?php

$index=1;

while($index <= 5){
    echo '<h1 style="text-align:center ; color:BurlyWood">index variable is : ' . $index . '</h1>' ;
    echo  '<h3 style="text-align:center ; color:BurlyWood">show this string</h3>' ;
    $index++ ;

}

?>

<?php

//do while loop

$index2 = 10 ;

do{
    echo '<h1 style="text-align:center ; color:BurlyWood">' . $index2 . '</h1>' ;
    $index2++ ;
}while($index2 <= 5) ;

?>

</body>
</html>