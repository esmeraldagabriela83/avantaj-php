<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files create product</title>
<!-- hamburger menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/hamburger.css" rel="stylesheet" />
<!-- hamburger menu -->
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<!-- https://www.w3schools.com/howto/howto_js_mobile_navbar.asp -->
<!-- Simulate a smartphone / tablet -->
<!-- Top Navigation Menu -->
<header class="topnav">

  <a href="main.php" class="active"><strong>Magazin Mixt</strong></a>

  <div>
  <div id="myLinks">
    <a href="magazin.php">Administreaza magazin</a>
    <a href="orderPrice.php">Order by price</a>
    <a href="orderSelect.php">Order by your selection</a>
    <a href="priceBetween.php">View products between your price limits</a>
    <a href="main.php">Main magazin mixt</a>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

</header>

<!-- End smartphone / tablet look -->

<h3>Create your own product to print</h3>

<section class="center_content" style="background-color:LightSkyBlue ; height:100vh">

<form action="files.php" method="POST" enctype="multipart/form-data">

<label for="nrProdus">Nr of product</label><br>
            <input type="number" name="numarProdus" id="nrProdus" value="<?php
            if( isset($_POST['numarProdus']) ){
               echo $_POST['numarProdus'] ;
            }
            ?>"/><br/>

   
<label for="numeinput">Nume produs</label><br>
     <input type="text" name="nume" id="numeinput" value="<?php
     if(isset($_POST['nume'])){echo $_POST['nume'];}
     ?>"/><br/>



            <label for="select_categorie">Categorie</label>
             <select  name="categorie"  id="select_categorie" style="margin-top:1em">
                <option value="dulciuri">1 - dulciuri</option>
                <option value="alimente">2 - alimente</option>
                <option value="haine femei">3 - haine femei</option>
                <option value="haine barbati">4 - haine barbati</option>
                <option value="haine copii">5 - haine copii</option>
                <option value="legume">6 - legume</option>
                <option value="fructe">7 - fructe</option>
            </select><br/>

            <label for="pretProdus">Pret</label><br>
            <input type="number" name="pret" id="pretProdus" value="<?php
            if( isset($_POST['pret']) ){
               echo $_POST['pret'] ;
            }
            ?>"/><br/>






            <label for="data">Data de expirare</label> 
            <input type="date" name="data_expirare" id="data" value=" <?php
            if( isset($_POST['data_expirare']) ){
                //CA SA RAMANA BIFAT DE CATRE USER
               echo $_POST['data_expirare'] ;
            }
            ?> "/><br/>






            <label for="comment">Write your comment</label><br>
          <!-- <input type="comment" placeholder="Write your comment" id="comment"/> -->
          <!--TEXTAREA FROM W 3 SCHOOL-->
          <textarea id="comment" placeholder="Comment" name="magazin_comment" rows="4" cols="50" required >
<?php
if (isset($_POST['magazin_comment'])){echo $_POST['magazin_comment'];}
 ?>
          </textarea>






          <input type="file" name="fisier" id="fi" style="display:none" /><br/>

        <label for="fi">
        <img src="images/upload2.png" style="height:2.5em ;
                                             margin:0.5em ;
                                             border-radius: 10px;
                                             box-shadow: 1px 1px 1.5px 1.5px gray;"/><br>
        Image 
        </label><br>





    <input type="submit" name="creeaza" value="Creeaza produs" />
</form>

</section>



<section class="center_content" style="background-color:Thistle">

<?php

if(isset($_POST['creeaza'])){



    $fisierul = $_FILES['fisier'];
    //print_r($fisierul);
    echo '<br>' ;
//name este cheie predefinita

$nume_nou = 'uploads/' . microtime() . " - " . $fisierul['name'];


// incarcam fisierul din formular (temporar in browser)
// in locatia aleasa de catre noi (uploads/nume...) folder-ul uploads fiind creat manual
move_uploaded_file( $fisierul['tmp_name'], $nume_nou );
// echo 'calea fisierului:  uploads/' . $fisierul['name'];

// echo '<p style="text-align:center ; padding:1em">' . $fisierul['type'] . '</p>';

echo '<article>';
   if ($fisierul['type'] == 'image/jpeg' ||
            $fisierul['type'] == 'image/jpg' ||
            $fisierul['type'] == 'image/png'||
            $fisierul['type'] == 'image/gif' ||
            $fisierul['type'] == 'image/svg + xml'   ){
              echo '<div style="display:flex ; align-items:center ; justify-content:center ; padding:1em">' ;
                echo '<img src="' .$nume_nou . '" alt="my-photo2" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />' ;
              echo '</div>' ;
        }  else{
            echo '<a href="' . $nume_nou . '" target="_blank">view FILE</a>';
        }
echo '</article>';

    echo '<h3>The product has been created:</h3>';

    $cale ='files/product' . microtime() . '.html' ;
$ch = fopen($cale,'w');

$text = '<h1 style="text-align:center; color:gray"> Produsul nr ' .  $_POST['numarProdus'] . '</h1>';

$text .= '<div id="createdProduct" 
               style="margin: 30px 20%;
               border: 3px solid Purple;
               padding: 3em;
               background-color:PeachPuff">
               
               <h3>Product ' .$_POST['nume'] . ' costa: ' . $_POST['pret'] . ' RON</h3> 
               <p>Product category: ' .$_POST['categorie'] . ' </p> 
               <p>Data de expirare: ' .$_POST['data_expirare'] . ' </p>
               <p>Detalii: ' .$_POST['magazin_comment'] . ' </p>

               <div style="display:flex ; align-items:center ; justify-content:center ; padding:1em">
               <img src="../' .$nume_nou . '" alt="my-photoHTMLnew" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />
               </div>

          </div>';
          $text .= '<h3 style="text-align:center">' . date("l jS \of F Y h:i:s A"). '</h3>';          
fwrite($ch,$text );


echo '<a href="' . $cale .'" target="_blank">Product nr: ' . $_POST['numarProdus'] . '</a>';


}
?>
</section>

<footer>

<p class="link_page"><a href="magazin.php" style="text-align:center">Administreaza magazin</a></p>
<p class="link_page"><a href="orderPrice.php" style="text-align:center">Order by price</a></p>
<p class="link_page"><a href="orderSelect.php" style="text-align:center">Order by your selection</a></p>
<p class="link_page"><a href="priceBetween.php" style="text-align:center">View products between your price limits</a></p>
<p class="link_page"><a href="main.php" style="text-align:center">Main magazin mixt</a></p>

<p class="source_photo"><a href="https://www.pexels.com/ro-ro/" target="_blank">
https://www.pexels.com/ro-ro/
          </a></p>


<?php
//https://www.w3schools.com/php/func_date_date.asp

// Prints the day, date, month, year, time, AM or PM
echo '<h3>'. date("l jS \of F Y h:i:s A") . '<h3>';
?>

</footer>

</body>
<script src="js/hamburger.js"></script>
</html>

