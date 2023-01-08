
<h1>Toti anii bisecti intre 1900 si 2022</h1>
<?php
    $x = 1;
    for ($an = 1900; $an <= 2022; $an ++) {
        echo $x . ' - ';
        if ($an % 4 == 0){
            echo '<span style="background: yellow">' .$an . '</span><br/>';
        } elseif (($an + $x) % 4 == 0) {
            echo $an . ' peste' . $x . ' ani va fi an bisect<br/>';
            $x++;
        } else {
            echo $an . '<br/>';
        }
    }   
?>