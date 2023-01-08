<?php
$lunile = array('Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie');
?>
<form action="" method="get">
    <select name="month">
        <?php
            foreach($lunile as $luna){
                if ($_GET['month'] == $luna){
                    echo '<option selected="selected">' . $luna . '</option>';
                } else {
                    echo '<option>' . $luna . '</option>';
                }
            }
        ?>
    </select>
    <input type="submit" name="anotimp" />
</form>
<p>Avand array-ul cu lunile anului (in cod) generati tag-urile &lt;option&gt; pentru toate lunile in &lt;select&gt; (foreach sau for). In functie de luna aleasa afisati sub formular anotimpul corespunzator.</p>
<p>optional*: optiunea aleasa anterior sa ramana selectata (tag-ul option cu valoarea egala cu cea din $_GET['luna'] sa aiba atributul selected)</p>

<?php
    if (isset($_GET['anotimp'])){
        $month = $_GET['month'];
        if ($month == 'Decembrie' || $month == 'Ianuarie' || $month == 'Februarie'){
            echo $month .' este o luna de Iarna';
        } elseif ($month == 'Martie' || $month == 'Aprilie' || $month == 'Mai'){
            echo $month .' este o luna de Primavara';
        }  elseif ($month == 'Iunie' || $month == 'Iulie' || $month == 'August'){
            echo $month .' este o luna de Vara';
        } elseif ($month == 'Septembrie' || $month == 'Octombrie' || $month == 'Noiembrie'){
            echo $month .' este o luna de Toamna';
        } else {
            echo 'big problem';
        }
    }

?>
