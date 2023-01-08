<?php

echo '<h2 style="color:green">this is db8.php</h2>' ;



    $c = mysqli_connect('localhost', 'root', '', 'cofetarie');

    // mysqli_connect() -> realizeaza baza de date
    // 'localhost' -> serverul de mysql (poate fi inlocuit cu '127.0.0.1')
    // 'root' -> numele utilizatorului de baza de date (root este user-ul default)
    // '' -> parola utilizatorului de baza de date (parola default la user-ul root este '')
    // 'cofetarie' -> numele bazei de date

    // print_r ($c);

    mysqli_query($c, "INSERT INTO produse (nume_produs, id_categorii, pret, data_expirare) VALUES ('ecler', '13', '1','2022-12-31' ),('inghetata','12','2','2822-12-31')");
    

?>
<p>Inseram in baza de date urmatorul rand: 'ecler, pret: 13, id-cat: 1, 2022-12-31'</p>