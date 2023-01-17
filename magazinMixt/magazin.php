<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazin mixt</title>

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
    <a href="main.php">Main</a>
    <a href="orderPrice.php">Order by price</a>
    <a href="orderSelect.php">Order by your selection</a>
    <a href="priceBetween.php">View products between your price limits</a>
    <a href="files.php">Create product to print</a>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

</header>

<!-- End smartphone / tablet look -->

    <h1 id="uppage">Magazin</h1>
    <h3>Administreaza</h3>

    

<section class="center_content" style="background-color:LightYellow">

<!-- add products form -->

    <form id="form" class="form" action="magazin.php" method="POST" enctype="multipart/form-data">

    <h1>Adauga produse</h1>

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
        Add your image or file
        </label><br>






            <input type="submit" name="adauga" value="Aduaga" />

    </form>
</section>



<section class="center_content" style="background-color:Lavender">

<!-- update products form -->


        <form action="magazin.php" method="post" enctype="multipart/form-data">

        
<h1>MODIFICA produs</h1>
             
            <label for="id_produs">ID Produs de modificat</label></br>
            <input type="text" name="id_produs" /><br/>


            <label for="numeinput2">Nume produs</label><br>
     <input type="text" name="nume2" id="numeinput2" value="<?php
     if(isset($_POST['nume2'])){echo $_POST['nume2'];}
     ?>"/><br/>



            <label for="select_categorie2">Categorie</label>
             <select  name="categorie2"  id="select_categorie2" style="margin-top:1em">
                <option value="dulciuri">1 - dulciuri</option>
                <option value="alimente">2 - alimente</option>
                <option value="haine femei">3 - haine femei</option>
                <option value="haine barbati">4 - haine barbati</option>
                <option value="haine copii">5 - haine copii</option>
                <option value="legume">6 - legume</option>
                <option value="fructe">7 - fructe</option>
            </select><br/>

            <label for="pretProdus2">Pret</label><br>
            <input type="number" name="pret2" id="pretProdus2" value="<?php
            if( isset($_POST['pret2']) ){
                //CA SA RAMANA BIFAT DE CATRE USER
               echo $_POST['pret2'] ;
            }
            ?>"/><br/>





            <label for="data2">Data de expirare</label> 
            <input type="date" name="data_expirare2" id="data2" value="<?php
            if( isset($_POST['data_expirare2']) ){
                //CA SA RAMANA BIFAT DE CATRE USER
               echo $_POST['data_expirare2'] ;
            }
            ?>"/><br/>






            <label for="comment2">Write your comment</label><br>
          <!-- <input type="comment" placeholder="Write your comment" id="comment"/> -->
          <!--TEXTAREA FROM W 3 SCHOOL-->
          <textarea id="comment2" placeholder="Comment" name="magazin_comment2" rows="4" cols="50" required >
<?php
if (isset($_POST['magazin_comment2'])){echo $_POST['magazin_comment2'];}
 ?>
          </textarea>






          <input type="file" name="fisier2" id="fi2" style="display:none" /><br/>

        <label for="fi2">
        <img src="images/upload2.png" style="height:2.5em ;
                                             margin:0.5em ;
                                             border-radius: 10px;
                                             box-shadow: 1px 1px 1.5px 1.5px gray;"/><br>
        Add ANOTHER image or file
        </label><br>






            <input type="submit" name="modifica" value="Modifica"  />
        </form>


</section>



<section  style="background-color:PowderBlue">

    <?php


//accesam baza de date
// $c_db = mysqli_connect('localhost', 'root', '', 'magazinmixt');
$c_db = mysqli_connect('localhost', 'tfaudmsg_magazinmixt_user', '^4EfxA9+)7as', 'tfaudmsg_magazinmixt');


// verificare conexiune
    if(mysqli_connect_errno()){
        echo 'NU s-a conectat la baza de date';
        exit;
    } else {
        echo '<h3>Conexiune cu succes</h3>' ;



        if(isset($_POST['adauga'])){

            echo '<h3>Your form was submitted</h3>' ;
        
        
            echo  '<h3>Nume produs: ' . $_POST['nume'] . '</h3>' ;
            echo  '<h3>Select: ' . $_POST['categorie'] . '</h3>' ;
            echo  '<h3>Pret: ' . $_POST['pret'] . '</h3>' ;
            echo  '<h3>Data expirare: ' . $_POST['data_expirare'] . '</h3>' ;
            echo  '<h3>Comment: ' . $_POST['magazin_comment'] . '</h3>' ;
        
        
        
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
        

//sent email when submit button
        $headers = 'From: magazinMixt@mihaelagabriela.ro' . "\r\n" .
        // 'Reply-To: '. $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


        mail('esmeraldagabriela83@yahoo.com' ,
        'Mail de pe magazinMixt/magazin.php' ,
        'Name of product is: ' . $_POST['nume'] .
       
        ' Category of product:  ' . $_POST['categorie'] .
        ' Produs cu pret:  ' . $_POST['pret'] .
        ' Data expirare:  ' . $_POST['data_expirare'] .
        ' Details of product:  ' . $_POST['magazin_comment'] );

  //sent email when submit button   
  
  
  // INSERAM PRODUSE - INSERT
        //definire variabile pt informatiile din tabel, pt a putea fi inserate cu mysqli_query()

        $name = $_POST['nume'];
        $select_produs = $_POST['categorie'];
        $pret = $_POST['pret'];
        $data_expirare = $_POST['data_expirare'];
        $magazin_comment = $_POST['magazin_comment'];

    
        $image = $nume_nou;


        // INSERAM PRODUSE - INSERT
        //register cu INSERT
        // pasul 4.2 - inseram variabilele cu informatii din formular in baza de date

        mysqli_query($c_db, "INSERT INTO magazin_mixt_table (name, select_produs, pret, data_expirare , magazin_comment, image) 
                                        VALUES ('$name', '$select_produs', '$pret','$data_expirare' , '$magazin_comment' , '$image' )");

        // end INSERARE PRODUSE -INSERT

        
        }

      

        // STERGERE PRODUSE
        if (isset($_POST['sterge'])){
        $id_produs = $_POST['id'];
        mysqli_query($c_db,"DELETE FROM magazin_mixt_table WHERE id='$id_produs'");
        }
        // end STERGERE PRODUSE


        // ACTUALIZARE PRODUSE -  UPDATE
        if (isset($_POST['modifica'])){

            echo '<h3>Produsul tau a fost modificat</h3>' ;
        
            echo  '<h3>ID produs MODIFICAT: ' . $_POST['id_produs'] . '</h3>' ;
            echo  '<h3>Nume produs: ' . $_POST['nume2'] . '</h3>' ;
            echo  '<h3>Select: ' . $_POST['categorie2'] . '</h3>' ;
            echo  '<h3>Pret: ' . $_POST['pret2'] . '</h3>' ;
            echo  '<h3>Data expirare: ' . $_POST['data_expirare2'] . '</h3>' ;
            echo  '<h3>Comment: ' . $_POST['magazin_comment2'] . '</h3>' ;


            $fisierul = $_FILES['fisier2'];
            //print_r($fisierul);
            echo '<br>' ;
        //name este cheie predefinita
        
        $nume_nou = 'uploads/' . microtime() . " - " . $fisierul['name'];
        
        // incarcam fisierul din formular (temporar in browser)
        // in locatia aleasa de catre noi (uploads/nume...) folder-ul uploads fiind creat manual
        move_uploaded_file( $fisierul['tmp_name'], $nume_nou );
        // echo 'calea fisierului:  uploads/' . $fisierul['name'];
        
        // echo '<p style="text-align:center ; padding:1em">' . $fisierul['type'] . '</p>';
        
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



            $id_produs = $_POST['id_produs'];

            $produs  = $_POST['nume2'];
            $cat  = $_POST['categorie2'];
            $data  = $_POST['data_expirare2'];
            $pret  = $_POST['pret2'];
            $magazin_comment=$_POST['magazin_comment2'];

            $image = $nume_nou;

            mysqli_query($c_db, "UPDATE magazin_mixt_table SET name='$produs', select_produs='$cat', pret='$pret', data_expirare='$data', magazin_comment='$magazin_comment', image='$image'  WHERE id='$id_produs' ");
        }
        // end ACTUALIZARE PRODUSE -  UPDATE



    }

     ?>

</section>

<section style="background-color:Cornsilk ;
                display:flex;
                align-items:center;
                justify-content:center;
                flex-direction:column">

<?php




//log in CU SELECT
        // AFISAM PRODUSE

        echo '<h1>Afisare produse ale magazinului mixt</h1>';

        $selectie_db = mysqli_query($c_db, "SELECT * FROM magazin_mixt_table");
        

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
        echo '<th>DELETE</th>';
        echo '</tr>';

      
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

//<!-- delete products form -->
            echo '<td>'; ?>
            <form action="magazin.php" method="post">
                <input type="hidden" name="id" value="<?php echo $rez['id'] ?>"/>
                <input type="submit" name="sterge" value="delete" />
            </form>
            <?php 
            echo '</td>';


            echo '</tr>';
        }
        echo '</table>';

// end AFISARE PRODUSE

?>

</section>

<footer>
<p class="link_page"><a href="main.php" style="text-align:center">Main</a></p>
<p class="link_page"><a href="orderPrice.php" style="text-align:center">Order by price</a></p>
<p class="link_page"><a href="orderSelect.php" style="text-align:center">Order by your selection</a></p>
<p class="link_page"><a href="priceBetween.php" style="text-align:center">View products between your price limits</a></p>
<p class="link_page"><a href="files.php" style="text-align:center">Create product to print</a></p>

<p class="source_photo"><a href="https://www.pexels.com/ro-ro/" target="_blank">
https://www.pexels.com/ro-ro/
          </a></p>


<a href="#uppage" style=" position: fixed; background-color:yellow;font-size:1rem;
                          bottom: 0;
                          right: 0;
                          width: auto">up<br> page</a>
</footer>

</body>
<script src="js/hamburger.js"></script>
</html>