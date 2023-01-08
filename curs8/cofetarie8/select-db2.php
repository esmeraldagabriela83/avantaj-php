<?php
//accesam baza de date
    $c_db = mysqli_connect('localhost', 'root', '', 'cofetarie');

    //verificam daca s-a realizat conexiunea cu baza de date
    if(mysqli_connect_errno()){
        // daca nu - mesaj de eroare + exit (terminarea programului, nu se mai executa)
        echo 'NU s-a conectat la baza de date';
        exit;
    } else {
        echo 'conexiune cu succes';

        // daca da - realizam un query SELECT pe baza de date
        $selectie_db = mysqli_query($c_db, "SELECT * FROM produse");
        

        echo '<table border="1" cellpadding="10">';
        echo '<tr style="background: #ddd">';
        echo '<th> ID </th>';
        echo '<th>Nume Produs</th>';
        echo '<th>Categorie</th>';
        echo '<th>Pret</th>';
        echo '<th>Expira</th>';
        echo '</tr>';

        // prelucram raspunsul creand cate un array pentru fiecare rand returnat in urma query-ului
        //  mysqli_fetch_assoc() -> creeaza un array asociativ pentru fiecare rand unde cheia este numele coloanei iar valoarea este exact valoarea din dreptului acelei coloane
        // mysqli_fetch_assoc()  -> va returna false atunci cand nu mai sunt rezultate (daca sunt 0 rezultate sau dupa ultimul rand returnat)
        // while se declanseaza in continuu atat timp cat declaratia dintre () este true - daca este false, se opreste
        // $rez este variabila array pentru fiecare rand si este inventata de noi
        while($rez =  mysqli_fetch_assoc($selectie_db)){
            echo '<tr>';
            echo '<td>'.  $rez['id'] . '</td>';
            echo '<td>'.  $rez['nume_produs'] . '</td>';
            echo '<td>'.  $rez['id_categorii'] . '</td>';
            echo '<td>' . $rez['pret'] . '</td>';
            echo '<td>'.  $rez['data_expirare'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
?>