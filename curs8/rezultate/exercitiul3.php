<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .thumbnail {
            margin: 20px;
            border: 3px solid purple;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            overflow: hidden;
        }
        .thumbnail  img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fisiere[]" multiple /><br/>
    <input type="submit" name="trimite" />
</form>

<p>Avand formularul de mai sus, trimiteti 3 imagini, salvati-le in folder-ul uploads si afisati-le pe fiecare intr-un div cu clasa="thumbnail"  </p>

<?php
    if (isset($_POST['trimite'])){

        ////////////////////////my try

echo "<h3>files sunt: </h3>";        
print_r($_FILES);
echo '<br>' ;

echo "<h3>fisierele din files sunt: </h3>";
print_r($_FILES['fisiere']);
echo '<br>' ;
echo count($_FILES['fisiere']);

echo "<h3>tmp_name din files fisiere sunt: </h3>";
print_r($_FILES['fisiere']['tmp_name']);
echo '<br>' ;
echo count($_FILES['fisiere']['tmp_name']);

echo "<h3>name din files fisiere sunt: </h3>";
print_r($_FILES['fisiere']['name']);
echo '<br>' ;
echo count($_FILES['fisiere']['name']);

   ////////////////////////my try


        $nr_fisiere = count($_FILES['fisiere']['name']);

        for($x = 0 ; $x < $nr_fisiere; $x++){
            $cale ='uploads/'. microtime() . $_FILES['fisiere']['name'][$x];
            move_uploaded_file($_FILES['fisiere']['tmp_name'][$x], $cale);

            if (strpos($_FILES['fisiere']['type'][$x], 'image') !== false ){
                echo '<div class="thumbnail"><img src="' . $cale . '"></div>'; 
            } else {
                echo '<a href="' . $cale . '" download">'.$cale.'</a><br/><br/>'; 
            }
        }
    }
?>



</body>
</html>