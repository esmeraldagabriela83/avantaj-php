<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course


echo '<h1 style="text-align:center ; color:hotpink">including HTML</h1>' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>including HTML</title>
</head>
<body>
    
<?php 
include "header.html" ;
?>

<p style="text-align:center ; color:blue">my content paragraph</p>

<?php
include "footer.html" ;
?>

</body>
</html>