<p>
Planul:<br/>
    1. Cream un formular care sa aiba cate un camp pentru fiecare coloana din tabelul din baza de date<br/>
    2. Realizam legatura cu baza de date<br/>
    3. Verificam trimiterea formularului (if isset)<br/>
    4. Realizam un query (INSERT) cu datele preluate din formular
</p>

<!-- rezolvare alin curs 9 -->
<!-- pasul 1 -->
<form action="" method="post">
    Nume <input type="text" name="nume" /><br/>
    Categorie <input type="text" name="categorie" /><br/>
    Pret <input type="text" name="pret" /><br/>
    Data de expirare <input type="date" name="data" /><br/>
    <input type="submit" name="adauga" />
</form>


<?php
    // pasul 2
    $c = mysqli_connect('localhost', 'root', '', 'cofetarie');

    // pasul 3
    if(isset($_POST['adauga'])){

        // pasul 4
        // pasul 4.1 - cream variabile cu informatiile din formular
        $produs  = $_POST['nume'];
        $cat  = $_POST['categorie'];
        $pret  = $_POST['pret'];
        $data  = $_POST['data'];

        // pasul 4.2 - inseram variabilele cu informatii din formular in baza de date
        mysqli_query($c, "INSERT INTO produse (nume_produs, id_categorii, pret, data_expirare) VALUES ('$produs', '$cat', '$pret','$data' )");
    }
?>