<?php
$lunile = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie');
?>

<form action="" method="get">
    <select name="month" >

    <!-- <option>Ianuarie</option> -->
        <!-- <option>...</option> -->

<?php

foreach($lunile as $lunaKeyIndex => $lunaValue){
      
    if ($_GET['month'] == $lunaValue) {
        // afiseaza optiunea deja selectata
        echo '<option selected="selected" value="' .$lunaValue. '">' . $lunaValue . '</option>';
    } else {
        // default
        echo '<option value="' .$lunaValue. '">' . $lunaValue . '</option>';
    }

} 

?>


    </select>
    <input type="submit" name="anotimp" />
</form>

<p>Avand array-ul cu lunile anului (in cod) generati tag-urile &lt;option&gt; pentru toate lunile in &lt;select&gt; (foreach sau for). In functie de luna aleasa afisati sub formular anotimpul corespunzator.</p>
<p>optional*: optiunea aleasa anterior sa ramana selectata (tag-ul option cu valoarea egala cu cea din $_GET['luna'] sa aiba atributul selected)</p>


<?php

if(isset($_GET["anotimp"])){


    if( $_GET["month"] == "Decembrie" || $_GET["month"] == "Ianuarie" || $_GET["month"] == "Februarie"){

              echo '<h1 style="text-align:center ; color:blue">' . $_GET["month"] . ' este o luna de iarna .</h1>' ;

    }elseif( $_GET["month"] == "Martie" || $_GET["month"] == "Aprilie" || $_GET["month"] == "Mai"){

        echo '<h1 style="text-align:center ; color:pink">' . $_GET["month"] . ' este o luna de primavara .</h1>' ;

    }elseif( $_GET["month"] == "Iunie" || $_GET["month"] == "Iulie" || $_GET["month"] == "August"){

        echo '<h1 style="text-align:center ; color:tomato">' . $_GET["month"] . ' este o luna de vara .</h1>' ;

    }elseif( $_GET["month"] == "Septembrie" || $_GET["month"] == "Octombrie" || $_GET["month"] == "Noiembrie"){

        echo '<h1 style="text-align:center ; color:cornflowerblue">' . $_GET["month"] . ' este o luna de toamna .</h1>' ;

    }else{
        echo "big problem" ;
    }


    echo '<h1 style="text-align:center ; color:green">' . $_GET["month"] . '</h1>' ;

}


?>




