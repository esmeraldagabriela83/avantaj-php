<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>patient.php</title>


      <!--ion icons-->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <!--ion icons-->

    <!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

    <!-- google fonts -->



     <!--font-awesome-->
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--font-awesome-->



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>



  <body>

    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->

    <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">

      <div class="container">
        <a class="navbar-brand" href="index.html"><strong>Tablet</strong><br><strong>Project</strong></a>
        
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Pills</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sort</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="alphabetical.html">Alphabetical</a></li>
              <li><a class="dropdown-item" href="byPrice.html">By price</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Info</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#scrollspyHeading3">Definition</a></li>
              <li><a class="dropdown-item" href="#scrollspyHeading4">History</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#scrollspyHeading5">Classification</a></li>
            </ul>
          </li>

        </ul>

  

      </div> 
    </nav>

      <a href="https://images.pexels.com/photos/3683118/pexels-photo-3683118.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="./images/patient.jpg" class="img-fluid" alt="patient_image_pills" id="img_patient">
      </a>


    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->

<div class="container">

<!-- form add patient -->
<form id="form" class="form" action="patient.php" method="POST" enctype="multipart/form-data">


<h1>Patient data</h1>

<hr>

<label for="numeinput">Patient name</label><br>
<input type="text" name="nume" class="form-control" id="numeinput" value="<?php
if(isset($_POST['nume'])){echo $_POST['nume'];}
?>"/><br/>

<!----------------->
    <label for="select_categorie">Category</label><br>
     <select  name="categorie" class="form-control" id="select_categorie" style="margin-top:1em">
        <option value="young">young</option>
        <option value="adult">adult</option>
        <option value="old">old</option>
    </select><br/>
<!----------------->


          <label for="email">Email</label><br>
          <input type="email" name="email" class="form-control" id="email" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['email'])){echo $_POST['email'] ; }
 ?>
          " required />
          
<!----------------->   
          <label for="user-phone" style="margin:1em 0">Write your phone number</label><br>

<input type="tel" id="user-phone" name="phone" class="form-control"  size="30" maxlength="10" value="<?php
//ca sa ramana bifat de catre user
if(isset($_POST['phone'])){echo $_POST['phone'] ; }
 ?>" required />




<!----------------->

    <label for="age" style="margin:0.5em 0">Age</label><br>
                <input type="number" name="age" class="form-control" id="age" value="<?php
                if( isset($_POST['age']) ){
                echo $_POST['age'] ;
                }
                ?>"/><br/>
<!----------------->      
    <label for="data">Birth day</label> 
                <input type="date" name="data_nastere" class="form-control" id="data" value=" <?php
                if( isset($_POST['data_nastere']) ){
                    //CA SA RAMANA BIFAT DE CATRE USER
                echo $_POST['data_nastere'] ;
                }
                ?> "/><br/>
<!----------------->   
    <label for="comment">Write your comment</label><br>
            <textarea id="comment" placeholder="Comment" name="patient_comment" class="form-control" style="width:100%" required >
    <?php
    if (isset($_POST['patient_comment'])){echo $_POST['patient_comment'];}
    ?>
          </textarea>
<!----------------->   


<input type="file" name="fisier" id="fi" style="display:none" /><br/>

<label for="fi">
<img src="images/upload2.png" style="height:2.5em ;
                                     margin:0.5em ;
                                     border-radius: 10px;
                                     box-shadow: 1px 1px 1.5px 1.5px gray;"/><br>
Add your recipe or file
</label><br>
<!-----------------> 


<div style="padding:1.5em 0 1.5em 0">
          <a href="termsAndConditions.html">
      Terms and conditions info
          </a><br>
        </div>



          <label for="bifaId">Terms and conditions</label><br>
          <input type="checkbox" id="bifaId"  name="bifa" <?php
                      if (isset($_POST['bifa'])){
                          echo 'checked="checked"';
                      }
                  ?>/><br/>



<!-----------------> 
<input type="submit"
       name="adauga" 
       value="Add patient"
       class="btn btn-success"
       style="margin:0.5em 0;  box-shadow: 1px 1px 3px #888888;" />

</form>
<!-- form add patient -->

</div>



<div class="container">
    <?php 
    


//accesam baza de date
 $c_db = mysqli_connect('localhost', 'root', '', 'patientdb');
// $c_db = mysqli_connect('localhost', 'tfaudmsg_magazinmixt_user', '^4EfxA9+)7as', 'tfaudmsg_magazinmixt');


// verificare conexiune
    if(mysqli_connect_errno()){
        echo 'NU s-a conectat la baza de date';
        exit;
    } else {
        //echo '<h5>Successful connection</h5>' ;

        //---------------------------------------

        // afisam datele din formular

        // echo '<h5>Form data:</h5>';

      
        if(isset($_POST['bifa']) && isset($_POST['adauga'])){

          ///1afisare in pagina

          echo '<div>

          <h5>you clicked the submit btn:</h5>
          <h5>Username is : ' . $_POST['nume'] . '.</h5>
          <h5>Categorie is : ' . $_POST['categorie'] . '.</h5>
          <h5>Email address is : ' . $_POST['email'] . '.</h5>
          <h5>Phone: ' . $_POST['phone'] . '</h5>
          <h5>Age: ' . $_POST['age'] . '</h5>
          <h5>Birth day: ' . $_POST['data_nastere'] . '</h5>
          <h5>Comment:  '. $_POST['patient_comment'] . '</h5>
      <hr>
          </div>';

      //afisare in pagina imagine
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
        echo '<div class="container">' ;
          echo '<img src="' .$nume_nou . '" alt="my-photo2" 
                    style="height: 11em ;
                    margin-top:0.5em; margin-bottom:0.5em;
                    border-radius: 10px ; 
                    box-shadow: 1px 1px 1.5px 1.5px gray" />' ;
        echo '</div>' ;
      }  else{
      echo '<a href="' . $nume_nou . '" target="_blank">view FILE</a>';
      }


      //afisare in pagina imagine


      ///1afisare in pag

      //2sent email when submit button
      $headers = 'From: tablet_php@mihaelagabriela.ro' . "\r\n" .
      // 'Reply-To: '. $_POST['email'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();


      mail('esmeraldagabriela83@yahoo.com' ,
      'Mail de pe patient_php/patient.php' ,
      'Name of patient is: ' . $_POST['nume'] .
      ' Category of patient:  ' . $_POST['categorie'] .
      ' Email of patient:  ' . $_POST['email'] .
      ' Phone of patient:  ' . $_POST['phone'] .
      ' Age :  ' . $_POST['age'] .
      ' Data nasterii:  ' . $_POST['data_nastere'] .
      ' Comment :  ' . $_POST['patient_comment'] );

      //2sent email when submit button   



       // INSERAM patients - INSERT
        //definire variabile pt informatiile din tabel, pt a putea fi inserate cu mysqli_query()

        $name = $_POST['nume'];
        $select_patient = $_POST['categorie'];
        $email = $_POST['email'];
        $tel = $_POST['phone'];
        $age = $_POST['age'];
        
        $birth_date = $_POST['data_nastere'];
        $comment = $_POST['patient_comment'];

    
        $image = $nume_nou;

        
        // INSERAM patients - INSERT
        //register cu INSERT
        // pasul 4.2 - inseram variabilele cu informatii din formular in baza de date

        mysqli_query($c_db, "INSERT INTO patienttable (name, select_patient, email, tel, age, birth_date , comment, image) 
                                        VALUES ('$name', '$select_patient', '$email' , '$tel' , '$age','$birth_date' , '$comment' , '$image' )");

        // end INSERARE patients -INSERT

  }
   
        //---------------------------------------

           }



    ?>
</div>

<div class="container">
<hr>
</div>

<!-- https://github.com/esmeraldagabriela83/php2-pizza/blob/main/php-form-pizza/contact.php -->
<!-- https://mihaelagabriela.ro/pizza-php/contact.php -->

<!-- https://mihaelagabriela.ro/magazinMixt/magazin.php -->
<!-- https://github.com/esmeraldagabriela83/avantaj-php/blob/main/magazinMixt/magazin.php -->



<div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="editPatient.php"  class="btn btn-primary link_btn"  role="button" id="editPatientLinkPage">
        Edit patient
      </a>
    </div>

<div class="container">
  <hr>
</div>


  <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="allPatients.php"  class="btn btn-primary link_btn"  role="button" id="allPatientaLinkPage">
        All patients
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="ascendPatients.php"  class="btn btn-primary link_btn"  role="button" id="ascendPatientaLinkPage" style="margin:1.5em 0">
        Ascend patients
      </a>
    </div>



    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="descendPatients.php"  class="btn btn-primary link_btn"  role="button" id="descendPatientaLinkPage">
        Descend patients
      </a>
    </div>



<div class="container">
  <hr>
</div>

    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="contact.php"  class="btn btn-primary link_btn"  role="button" id="contactLinkPage">
        Contact
      </a>
    </div>

    <div class="container">
      <hr>
    </div>

    <footer>
      <div class="container">
        <div id="icons">
          <div class="footerIcons"><a href="https://facebook.com/" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></div>
          <div class="footerIcons"><a href="https://instagram.com/" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></div>
          <div class="footerIcons"><a href="https://twitter.com/" target="_blank">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></div>
        </div>
      </div>

      
   
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>