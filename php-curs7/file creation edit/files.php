<form action="" method="post">
    <input type="text" name="nr_chitanta" placeholder="nr chitanta" /><br/>
    <input type="text" name="nume" placeholder="nume" /><br/>
    <input type="number" name="valoare" placeholder="valoare" /><br/>
    <input type="submit" name="creeaza" />
</form>
<?php
    if(isset($_POST['creeaza'])){

        $cale ='chitante/chitanta' . microtime() . '.html' ;
        $ch = fopen($cale,'w');

        $text = '<h1 style="text-align:center"> chitanta nr ' .  $_POST['nr_chitanta'] . '</h1>';
        $text .= '<div id="chitanta" 
                       style="margin: 30px 20%; border: 3px solid black; padding: 100px;">
                       Astazi, data... persoana ' .$_POST['nume'] . ' a achitat produsul ... in valoare de ' . $_POST['valoare'] . ' RON
                  </div>';
        fwrite($ch,$text );
        
        echo 'Chitanta a fost creata. Vezi <a href="' . $cale .'" target="_blank">Chitanta nr' . $_POST['nr_chitanta'] . '</a>';
    }
?>