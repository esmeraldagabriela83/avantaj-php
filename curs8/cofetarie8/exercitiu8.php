

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cofetarie exercitiu8.php</title>
</head>
<body>

<h1>exercitiu8.php facut la curs 3 Wordpress</h1>

<h3>1.Cream un formular care sa aiba cate un camp pt fiecare coloana din tabelul din baza de date</h3>
<h3>2.Realizam legatura cu baza de date</h3>
<h3>3.Verificam trimiterea formularului (if isset)</h3>
<h3>4.Realizam un query (INSERT) cu datele preluate din formular</h3>

<p>Creati un formular prin care sa adaugati informatii in baza de date</p>
<p>Exemplu:</p>
<!-- pasul 1 -->
<form action="exercitiu8.php" method="post">
    Nume produs <input type="text" name="nume" /><br/>
    Categorie <input type="text" name="categorie" /><br/>
    Pret <input type="number" name="pret" /><br/>
    Data de expirare <input type="date" name="date" /><br/>
    <input type="submit" name="adauga" value="Adauga un dulce in produsele de cofetarie"/>
</form>
<p> Puteti sa il adaptati dupa baza de date construita de voi (ex: cofetaria)</p>

</body>
</html>


<?php
//pasul 2
$c = mysqli_connect('localhost', 'root', '', 'cofetarie');

//pasul3
if(isset($_POST['adauga'])){
    echo '<h1 style="color:green">your form was submitted</h1>' ;

    //pasul 4
    //pasul 4.1: cream variabile cu informatii din formular
    $produs=$_POST['nume'];
    $categorie=$_POST['categorie'];
    $pret=$_POST['pret'];
    $date=$_POST['date'];
    
     //pasul 4.2: inseram variabilile cu informatii din formular in baza de date
    mysqli_query($c, "INSERT INTO produse (nume_produs, id_categorii, pret, data_expirare) VALUES ('$produs' , '$categorie' , '$pret' , '$date' )");


    echo '<h3>produsul tau este:' . $produs . '</h3>';
    echo '<h3>produsul tau este:' . $categorie . '</h3>';
    echo '<h3>produsul tau este:' . $pret . '</h3>';
    echo '<h3>produsul tau este:' . $date . '</h3>';
}

?>