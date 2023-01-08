<style>
    #formulare {
        display: flex;
    }
    #formulare div {
        width: 50%;
    }
</style>
<div id="formulare">
    <div id="insert">
        <h2>ADAUGA produs</h2>
        <form action="" method="post">
            Nume <input type="text" name="nume" /><br/>
            Categorie <select  name="categorie" >
                <option value="1"> 1 - Prajituri </option>
                <option value="2"> 2 - Patiserie </option>
                <option value="3"> 3 - Torturi </option>
            </select><br/>
            Pret <input type="text" name="pret" /><br/>
            Data de expirare <input type="date" name="data" /><br/>
            <input type="submit" name="adauga" value="aduaga" />
        </form>
    </div>

    <div id="edit">
        <h2>MODIFICA produs</h2>
        <form action="" method="post">
            ID Produs de modificat <input type="text" name="id_produs" /><br/>
            Nume <input type="text" name="nume" /><br/>
            Categorie <select  name="categorie" >
                <option value="1"> 1 - Prajituri </option>
                <option value="2"> 2 - Patiserie </option>
                <option value="3"> 3 - Torturi </option>
            </select><br/>
            Pret <input type="text" name="pret" /><br/>
            Data de expirare <input type="date" name="data" /><br/>
            <input type="submit" name="modifica" value="modifica"  />
        </form>
    </div>
</div>
<?php

//accesam baza de date
    $c_db = mysqli_connect('localhost', 'root', '', 'cofetarie');


// verificare conexiune
    if(mysqli_connect_errno()){
        echo 'NU s-a conectat la baza de date';
        exit;
    } else {
        echo 'conexiune cu succes';

    
        // INSERAM PRODUSE - INSERT
        if(isset($_POST['adauga'])){
            $produs  = $_POST['nume'];
            $cat  = $_POST['categorie'];
            $pret  = $_POST['pret'];
            $data  = $_POST['data'];

            mysqli_query($c_db, "INSERT INTO produse (nume_produs, pret, id_categorie, data_expirare) VALUES ('$produs', '$pret', '$cat','$data' )");
        }
        // end INSERARE PRODUSE -INSERT


        // STERGERE PRODUSE - DELETE
        if (isset($_POST['sterge'])){
            $id_produs = $_POST['id'];
            mysqli_query($c_db,"DELETE FROM produse WHERE id='$id_produs'");
        }
        // end STERGERE PRODUSE - DELETE


        // ACTUALIZARE PRODUSE -  UPDATE
        if (isset($_POST['modifica'])){
            $id_produs = $_POST['id_produs'];
            $produs  = $_POST['nume'];
            $cat  = $_POST['categorie'];
            $pret  = $_POST['pret'];
            $data  = $_POST['data'];

            mysqli_query($c_db, "UPDATE produse SET nume_produs='$produs', id_categorie='$cat', pret='$pret', data_expirare='$data' WHERE id='$id_produs' ");
        }
        // end ACTUALIZARE PRODUSE -  UPDATE

        // AFISAM PRODUSE - SELECT
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
            echo '<td>'.  $rez['id_categorie'] . '</td>';
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

        // end AFISARE PRODUSE - SELECT


    }
?>