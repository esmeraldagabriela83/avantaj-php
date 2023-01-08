
<form action="" method="post">
    Nume <input type="text" name="nume" /><br/>
    Categorie <select  name="categorie" >
        <option value="1"> 1 - Prajituri </option>
        <option value="2"> 2 - Patiserie </option>
        <option value="3"> 3 - Torturi </option>
    </select><br/>
    Pret <input type="text" name="pret" /><br/>
    Data de expirare <input type="date" name="data" /><br/>
    <input type="submit" name="adauga" value="Adauga" />
</form>

<?php

//accesam baza de date
    $c_db = mysqli_connect('localhost', 'root', '', 'cofetarie');


// verificare conexiune
    if(mysqli_connect_errno()){
        echo 'NU s-a conectat la baza de date';
        exit;
    } else {
        echo 'conexiune cu succes';

    
        // INSERAM PRODUSE
        if(isset($_POST['adauga'])){

            $produs  = $_POST['nume'];
            $cat  = $_POST['categorie'];
            $pret  = $_POST['pret'];
            $data  = $_POST['data'];

            // pasul 4.2 - inseram variabilele cu informatii din formular in baza de date
            mysqli_query($c_db, "INSERT INTO produse (nume_produs, pret, id_categorii, data_expirare) VALUES ('$produs', '$pret', '$cat','$data' )");
        }
        // end INSERARE PRODUSE


        // STERGERE PRODUSE
        if (isset($_POST['sterge'])){
            $id_produs = $_POST['id'];
            mysqli_query($c_db,"DELETE FROM produse WHERE id='$id_produs'");
        }
        // end STERGERE PRODUSE



        // AFISAM PRODUSE
        $selectie_db = mysqli_query($c_db, "SELECT * FROM produse");
        

        echo '<table border="1" cellpadding="10">';
        echo '<tr style="background: #ddd">';
        echo '<th> ID </th>';
        echo '<th>Nume Produs</th>';
        echo '<th>Categorie</th>';
        echo '<th>Pret</th>';
        echo '<th>Expira</th>';
        echo '<th>DELETE</th>';
        echo '</tr>';

      
        while($rez =  mysqli_fetch_assoc($selectie_db)){
            echo '<tr>';
            echo '<td>'.  $rez['id'] . '</td>';
            echo '<td>'.  $rez['nume_produs'] . '</td>';
            echo '<td>'.  $rez['id_categorii'] . '</td>';
            echo '<td>' . $rez['pret'] . '</td>';
            echo '<td>'.  $rez['data_expirare'] . '</td>';
            echo '<td>'; ?>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $rez['id'] ?>"/>
                    <input type="submit" name="sterge" value="delete" />
                </form>
            <?php 
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';

        // end AFISARE PRODUSE


    }
?>