
<h1>Toti anii bisecti intre 1900 si 2022</h1>
<?php

    for ($an = 1900; $an <= 2022; $an ++) {
        if ($an % 4 == 0){
            echo '<span style="background: yellow">' .$an . '</span><br/>';
        } else { 
            echo $an  . ' mai trebuie ' . (4 - $an % 4) . ' ani <br/>';
        }
    }   
?>