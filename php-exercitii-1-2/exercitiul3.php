<?php
$lunile = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie');
?>



<p>Avand array-ul cu lunile anului (in cod) adaugati tag-urile &lt;option&gt; pentru toate lunile in &lt;select&gt; (foreach sau for). In functie de luna aleasa afisati sub formular anotimpul corespunzator.</p>
<p>optional*: optiunea aleasa anterior sa ramana selectata (tag-ul option cu valoarea egala cu cea din $_GET['luna'] sa aiba atributul selected)</p>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<h1 style="text-align:center ; color:green">exercitiul3.php</h1>


<form id="form-one" action="" method="get">
    <select id="listSelect" name="luna">

            
<?php

for($index = 0 ; $index < count($lunile) ; $index ++){

echo '<option value= ' . $lunile[$index] .' > '. $lunile[$index] . '</option>' ;

}

?>


    </select>
    <input id="submitInput" type="submit" />
</form>

<h3 id="userMounthValueTitle" ></h3>



<script src="js/exercitiul3.js"></script>
    
</body>
</html>