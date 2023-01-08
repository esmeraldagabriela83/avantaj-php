<?php

//w 3 school select and option
//https://www.w3schools.com/tags/tag_option.asp
//http://www-db.deis.unibo.it/courses/TW/DOCS/w3schools/tags/att_option_selected.asp.html#gsc.tab=0


//w 3 school radio
//https://www.w3schools.com/tags/att_input_type_radio.asp

?>



<?php
$lunile = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie');

$languages = array('HTML','CSS','JS','PHP');
?>



<?php 





if (isset($_GET['submit'])) {

    echo $_GET['formName'];
    echo $_GET['formAge'];
    echo $_GET['email'];

    echo $_GET['language'];

    echo $_GET['luna'];

} ?>




<form  action="" method="get">


  <label>Name:<br> 
  <input type="text" name="formName">
  </label>
<br>

<label>Age: <br>
  <input type="text" name="formAge">
  </label>
<br>

<label>Email: <br>
<input type="email" name="email">
</label>






<h3>Please select your favorite Web language // radio input type:</h3>

<!--   <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>

  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>

  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label><br>

  <input type="radio" id="php" name="fav_language" value="PHP">
  <label for="php">PHP</label><br> -->




<?php

foreach($languages as $index => $language){

   echo '<div style="margin:0.5em 0 ; padding:0.5em 0 ; border:3px solid magenta">

        <input type="radio" name="language"  value=' . $language . '>

        <label for=' . $language . '>' . $language .  '</label><br>

        </div>' ;

}

?>





<h3>Please select your favorite mounth // select with option tags:</h3>

<!-- <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select> -->




    <select  name="luna">

            
<?php

foreach($lunile as $index => $luna){

    echo '<option value= ' . $luna .' > '. $luna . '</option>' ;

}

?>


    </select>
    
    <input id="submitInput" type="submit" />

</form>

<?php

echo '<h1 style="color:DimGray ; text-align:center">user name is '.  $_GET['formName'] .  ' and is: '  . $_GET['formAge'] . ' years old . </h1>' ;

echo '<h1 style="color:indigo ; text-align:center">email of user is : '.  $_GET["email"] .  ' . </h1>' ;

echo '<h1 style="color:magenta ; text-align:center">choosen language by user is : '.  $_GET['language'] .  ' . </h1>' ;

echo '<h1 style="color:gold ; text-align:center">choosen mounth by user is : '.  $_GET['luna'] .  ' . </h1>' ;

?>



<p>Avand array-ul cu lunile anului (in cod) adaugati tag-urile &lt;option&gt; pentru toate lunile in &lt;select&gt; (foreach sau for). In functie de luna aleasa afisati sub formular anotimpul corespunzator.</p>
<p>optional*: optiunea aleasa anterior sa ramana selectata (tag-ul option cu valoarea egala cu cea din $_GET['luna'] sa aiba atributul selected)</p>



