<?php 


echo "<h1>ex curs 6</h1>";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curs6</title>
</head>
<body>
    

<form enctype="multipart/form-data" method="post">


<input type="file" name="fisier"/><br>

<input type="submit" name="upload"/>


</form>


</body>
</html>


<?php

if(isset($_POST["upload"])){


$fisierul=$_FILES['fisier'];
$nume_nou = 'myUploads/' . microtime() . " - " . $fisierul['name'];

move_uploaded_file($fisierul['tmp_name'] , $nume_nou);

//name este cheie predefinita

echo '<img src="' .$nume_nou . '" alt="my-photo" style="width:50% ; border:3px solid green"/>' ;
}



?>