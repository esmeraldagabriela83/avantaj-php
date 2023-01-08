<?php
$lunile = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie');
?>
<form action="" method="get">
    <select name="luna">
        <option>Ianuarie</option>
        <option>...</option>
    </select>
    <input type="submit" />
</form>
<p>Avand array-ul cu lunile anului (in cod) adaugati tag-urile &lt;option&gt; pentru toate lunile in &lt;select&gt; (foreach sau for). In functie de luna aleasa afisati sub formular anotimpul corespunzator.</p>
<p>optional*: optiunea aleasa anterior sa ramana selectata (tag-ul option cu valoarea egala cu cea din $_GET['luna'] sa aiba atributul selected)</p>
 


rezolvare:

?>

 <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<h3>Lunile anului</h3>
<br>
 <form action="" method="get">
    <select name="luna">
      <?php
$anotimp ='primavara';
$lunile = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie');
for ($x=0; $x < count($lunile) ; $x++) { 
 if ($lunile[$x] == 'Decembrie' || $lunile[$x] == 'Ianuarie' || $lunile[$x] == 'Februarie'  ) {
  $anotimp = 'iarna';
 } elseif($lunile[$x] == 'Martie' || $lunile[$x] == 'Aprilie' || $lunile[$x] == 'Mai'  ) {
  $anotimp = 'primavara';
 } elseif($lunile[$x] == 'Iunie' || $lunile[$x] == 'Iulie' || $lunile[$x] == 'August'  ) {
  $anotimp = 'vara';
 } elseif($lunile[$x] == 'Septembrie' || $lunile[$x] == 'Octombrie' || $lunile[$x] == 'Noiembrie'  ) {
  $anotimp = 'toamna';
 }

 echo '<option class="'.$anotimp.'">'. $lunile[$x]. " " .$anotimp.'</option>';
}
 
?>   
    </select>
    <input type="submit">
 </form>
      
</body> 
</html>