<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Select magazin mixt</title>

<!-- hamburger menu -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="css/hamburger.css" rel="stylesheet" />
<!-- hamburger menu -->

    <link href="css/style.css" rel="stylesheet" />
</head>
<body style="background-color:MistyRose">


<!-- https://www.w3schools.com/howto/howto_js_mobile_navbar.asp -->
<!-- Simulate a smartphone / tablet -->
<!-- Top Navigation Menu -->
<header class="topnav">

  <a href="main.php" class="active"><strong>Magazin Mixt</strong></a>

  <div>
  <div id="myLinks">
    <a href="magazin.php">Administreaza magazin</a>
    <a href="main.php">Main magazin mixt</a>
    <a href="orderPrice.php">Order by price</a>
    <a href="priceBetween.php">View products between your price limits</a>
    <a href="files.php">Create product to print</a>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

</header>

<!-- End smartphone / tablet look -->

<h1 id="uppageOrderSelect">Order by your selection</h1>


<section class="center_content"  style="background-color:Khaki ; height:100vh">

<form id="formOrderSelect" class="form" action="orderSelect.php" method="POST">

<select name="orderProduct">

                  <option value="name ASC" <?php
                      if(isset($_POST['orderProduct']) && $_POST['orderProduct'] == 'name ASC') {
                          echo 'selected="selected"';
                      }
                  ?> >Ascend by name product</option>

                  <option value="name DESC" <?php
                      if(isset($_POST['orderProduct']) && $_POST['orderProduct'] == 'name DESC') {
                          echo 'selected="selected"';
                      }
                  ?> >Downward by name product</option>

                  <option value="pret ASC" <?php
                      if(isset($_POST['orderProduct']) && $_POST['orderProduct'] == 'pret ASC') {
                          echo 'selected="selected"';
                      }
                  ?> >Ascend by price</option>

                  <option value="pret DESC"<?php
                      if(isset($_POST['orderProduct']) && $_POST['orderProduct'] == 'pret DESC') {
                          echo 'selected="selected"';
                      }
                  ?> >Downward by price</option>

                  <option value="data_expirare"<?php
                      if(isset($_POST['orderProduct']) && $_POST['orderProduct'] == 'data_expirare') {
                          echo 'selected="selected"';
                      }
                  ?> >Data de expirare</option>

              </select>


              <input type="submit" value="Order product" name="showOrderProduct" style="cursor: pointer; padding:0.5em"/>



</form>

</section>




<section style="background-color:Plum;
                display:flex ;
                align-items:center;
                justify-content:center;
                flex-direction:column">


<?php


//exercitiu 
//conectativa la baza de date
//ordonare dupa pret descrescator



//accesam baza de date
// $c_db = mysqli_connect('localhost', 'root', '', 'magazinmixt');
$c_db = mysqli_connect('localhost', 'tfaudmsg_magazinmixt_user', '^4EfxA9+)7as', 'tfaudmsg_magazinmixt');


  //verificam daca s-a realizat conexiunea cu baza de date
  if(mysqli_connect_errno()){
    // daca nu - mesaj de eroare + exit (terminarea programului, nu se mai executa)
    echo 'NU s-a conectat la baza de date';
    exit;
} else {
   echo '<h3>Conexiune cu succes</h3>' ;


   if(isset($_POST['showOrderProduct'])){
    echo '<h3>You made your choice</h3>' ;

    echo '<h3>Your choice is ' . $_POST['orderProduct'] . '</h3>' ;

$mySelect=$_POST['orderProduct'];


             //log in cu select
        // daca da - realizam un query SELECT pe baza de date
        $selectie_db = mysqli_query($c_db, "SELECT * FROM magazin_mixt_table ORDER BY $mySelect");


//tabel cu informatia din magazin_mixt_table


echo '<table border="1" cellpadding="10">';
echo '<tr style="background: #ddd">';
echo '<th> ID </th>';
echo '<th style="background-color:MediumSpringGreen">Nume Produs</th>';
echo '<th>Categorie</th>';
echo '<th style="background-color:Pink">Pret</th>';
echo '<th>Expira</th>';

echo '<th>Detalii comment</th>';
// echo '<th>img</th>';
echo '<th>Image of product</th>';
echo '</tr>';


// prelucram raspunsul creand cate un array pentru fiecare rand returnat in urma query-ului
//  mysqli_fetch_assoc() -> creeaza un array asociativ pentru fiecare rand unde cheia este numele coloanei iar valoarea este exact valoarea din dreptului acelei coloane
// mysqli_fetch_assoc()  -> va returna false atunci cand nu mai sunt rezultate (daca sunt 0 rezultate sau dupa ultimul rand returnat)
// while se declanseaza in continuu atat timp cat declaratia dintre () este true - daca este false, se opreste
// $rez este variabila array pentru fiecare rand si este inventata de noi
while($rez =  mysqli_fetch_assoc($selectie_db)){


    echo '<tr>';

    echo '<td>'.  $rez['id'] . '</td>';
    echo '<td style="background-color:PaleGreen">'.  $rez['name'] . '</td>';
    echo '<td>'.  $rez['select_produs'] . '</td>';
    echo '<td style="background-color:MistyRose">' . $rez['pret'] . '</td>';
    echo '<td>'.  $rez['data_expirare'] . '</td>';
    echo '<td>'.  $rez['magazin_comment'] . '</td>';
    // echo '<td>'.  $rez['image'] . '</td>';

    echo '<td>';

    echo '<div style="display:flex ; align-items:center ; justify-content:center ; padding:1em">' ;
            $ext = explode('.', $rez['image']);
            $ext1 = count($ext)-1;
            if (strtolower( $ext[$ext1]) != 'jpg' && strtolower( $ext[$ext1]) != 'jpeg' && strtolower( $ext[$ext1])!= 'png' && strtolower( $ext[$ext1])!= 'gif' && strtolower( $ext[$ext1])!= 'svg')
                        echo '<a href="' . $rez['image'] . '" download>descarca</a>' ;
            else
                        echo '<img src="' . $rez['image'] . '" alt="my-photo" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />' ;
        echo '</div>' ;

    echo '</td>' ;


    echo '</tr>';



}
echo '</table>';

//tabel cu informatia din magazin_mixt_table




   }

}



?>


</section>





<footer>
<p class="link_page"><a href="magazin.php" style="text-align:center">Administreaza magazin</a></p>
<p class="link_page"><a href="main.php" style="text-align:center">Main magazin mixt</a></p>
<p class="link_page"><a href="orderPrice.php" style="text-align:center">Order by price</a></p>
<p class="link_page"><a href="priceBetween.php" style="text-align:center">View products between your price limits</a></p>
<p class="link_page"><a href="files.php" style="text-align:center">Create product to print</a></p>

<p class="source_photo"><a href="https://www.pexels.com/ro-ro/" target="_blank">
https://www.pexels.com/ro-ro/
          </a></p>


<a href="#uppageOrderSelect" style=" position: fixed; background-color:yellow;font-size:1rem;
                          bottom: 0;
                          right: 0;
                          width: auto">up<br> page</a>


</footer>
</body>
<script src="js/hamburger.js"></script>
</html>