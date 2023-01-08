<?php
    $nota1 = 10;
    $nota2 = 3;
    $varsata = 55;
?>
<p>Avand variabilele $nota1, $nota2 si $varsta, afisati: <br/>
    - admis daca $nota1 si $nota2 sunt mai mari decat 8.5 iar $varsta < 65 <br/>
    - respins daca nu se indeplinesc criteriile de mai sus
</p>




<?php 

echo "my try";

echo' <h1 style="color:indigo ; text-align:center"> nota 1 este :' . $nota1 . '/  nota 2 este :' . $nota2 . '/ varsta este :' . $varsata . '</h1>' ;


if($nota1 > 8.5 && $nota2 > 8.5 && $varsata < 65){


echo '<h1 style="color:green ; text-align:center">admis</h1>' ;

}else{

    echo '<h1 style="color:red ; text-align:center">respins</h1>' ;

}

?>






