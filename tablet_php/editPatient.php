<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>editPatient.php</title>


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
    <link href="css/opinion.css" rel="stylesheet">
</head>



  <body>

    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->



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
  
          </ul>
  
        </div> 
      </nav>
  
<div class="container" style="display:flex ;
                              align-items:start ;
                              justify-content:center ;
                              box-shadow: 1px 1px 3px #888888;
                              border-radius:5px;
                              background-color:#212529;
                              margin-top:30%">
    <a href="https://undraw.co/search"  target="_blank">
        <img src="./images/undraw_medical_care_movn_green.svg" class="img-fluid" alt="index_image_pills" id="img_index">
    </a>
</div>

      <div class="container">
        <h3 class="primary my-3">Edit patient</h3>
          <hr>
      </div>

  
    <!-- form content -->
    <div class="container">

<!-- form add patient -->
<form id="form" class="form" action="editPatient.php" method="POST" enctype="multipart/form-data">


<h1>Patient data</h1>

<label for="id_patient">ID edit patient</label></br>
            <input type="text" name="id_patient"  class="form-control" /><br/>

<hr>

<label for="numeinput2">Patient name</label><br>
<input type="text" name="nume2" class="form-control" id="numeinput2" value="<?php
if(isset($_POST['nume2'])){echo $_POST['nume2'];}
?>"/><br/>

<!----------------->
    <label for="select_categorie2">Category</label><br>
     <select  name="categorie2" class="form-control" id="select_categorie2" style="margin-top:1em">
        <option value="young">young</option>
        <option value="adult">adult</option>
        <option value="old">old</option>
    </select><br/>
<!----------------->


          <label for="email2">Email</label><br>
          <input type="email" name="email2" class="form-control" id="email2" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['email2'])){echo $_POST['email2'] ; }
 ?>
          " required />
          
<!----------------->   
          <label for="user-phone2" style="margin:1em 0">Write your phone number</label><br>

<input type="tel" id="user-phone2" name="phone2" class="form-control"  size="30" maxlength="10" value="<?php
//ca sa ramana bifat de catre user
if(isset($_POST['phone2'])){echo $_POST['phone2'] ; }
 ?>" required />




<!----------------->

    <label for="age2" style="margin:0.5em 0">Age</label><br>
                <input type="number" name="age2" class="form-control" id="age2" value="<?php
                if( isset($_POST['age2']) ){
                echo $_POST['age2'] ;
                }
                ?>"/><br/>
<!----------------->      
    <label for="data2">Birth day</label> 
                <input type="date" name="data_nastere2" class="form-control" id="data2" value=" <?php
                if( isset($_POST['data_nastere2']) ){
                    //CA SA RAMANA BIFAT DE CATRE USER
                echo $_POST['data_nastere2'] ;
                }
                ?> "/><br/>
<!----------------->   
    <label for="comment2">Write your comment</label><br>
            <textarea id="comment2" placeholder="Comment" name="patient_comment2" class="form-control" style="width:100%" required >
    <?php
    if (isset($_POST['patient_comment2'])){echo $_POST['patient_comment2'];}
    ?>
          </textarea>
<!----------------->   


<input type="file" name="fisier2" id="fi2" style="display:none" /><br/>

<label for="fi2">
<img src="images/upload2.png" style="height:2.5em ;
                                     margin:0.5em ;
                                     border-radius: 10px;
                                     box-shadow: 1px 1px 1.5px 1.5px gray;"/><br>
Edit your recipe or file
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
       name="edit" 
       value="Edit patient"
       class="btn btn-success"
       style="margin:0.5em 0;  box-shadow: 1px 1px 3px #888888;" />

</form>
<!-- form add patient -->

</div>
    <!-- form content -->


     <div class="container">
      <hr>
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
        echo '<h5>Successful connection</h5>' ;

        //---------------------------------------

       //-------------------------------------------------------//afisam datele din formular

       //echo '<h5>Form data EDIT:</h5>';

      // ACTUALIZARE PRODUSE -  UPDATE
        if(isset($_POST['bifa']) && isset($_POST['edit'])){

          ///1afisare in pagina

          echo '<div>

          <h5>you clicked the submit edit btn:</h5>
          <h5>ID edited patient: ' . $_POST['id_patient'] . '.</h5>
          <h5>Username2 is : ' . $_POST['nume2'] . '.</h5>
          <h5>Categorie2 is : ' . $_POST['categorie2'] . '.</h5>
          <h5>Email2 address is : ' . $_POST['email2'] . '.</h5>
          <h5>Phone2: ' . $_POST['phone2'] . '</h5>
          <h5>Age2: ' . $_POST['age2'] . '</h5>
          <h5>Birth day2: ' . $_POST['data_nastere2'] . '</h5>
          <h5>Comment2:  '. $_POST['patient_comment2'] . '</h5>
      <hr>
          </div>';

      //---------------------------------------------------------//afisare in pagina imagine
      $fisierul = $_FILES['fisier2'];
      //print_r($fisierul2);
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


      //-----------------------------------------------------------//afisare in pagina imagine


      ///1afisare in pag

      //---------------------------//2sent email when submit button
      $headers = 'From: tablet_php@mihaelagabriela.ro' . "\r\n" .
      // 'Reply-To: '. $_POST['email'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();


      mail('esmeraldagabriela83@yahoo.com' ,
      'Mail de pe editPatientt_php/editPatient.php' ,
      'ID of patient is: ' . $_POST['id_patient'] .
      'Name2 of patient is: ' . $_POST['nume2'] .
      ' Category2 of patient:  ' . $_POST['categorie2'] .
      ' Email2 of patient:  ' . $_POST['email2'] .
      ' Phone2 of patient:  ' . $_POST['phone2'] .
      ' Age2 :  ' . $_POST['age2'] .
      ' Data2 nasterii:  ' . $_POST['data_nastere2'] .
      ' Comment2 :  ' . $_POST['patient_comment2'] );

     //-------------------------------//2sent email when submit button   
  }
   
        //---------------------------------------


// UPDATE patients - UPDATE
        //definire variabile pt informatiile din tabel, pt a putea fi inserate cu mysqli_query()
        $id_patient = $_POST['id_patient'];

        $name = $_POST['nume2'];
        $select_patient = $_POST['categorie2'];
        $email = $_POST['email2'];
        $tel = $_POST['phone2'];
        $age = $_POST['age2'];
        
        $birth_date = $_POST['data_nastere2'];
        $comment = $_POST['patient_comment2'];

    
        $image = $nume_nou;



        mysqli_query($c_db, "UPDATE patienttable SET name='$name',
                                                    select_patient='$select_patient',
                                                    email='$email',
                                                    tel='$tel',
                                                    age='$age',
                                                    birth_date='$birth_date',
                                                    comment='$comment',
                                                    image='$image'  WHERE id='$id_patient' ");

        // end UPDATE PATIENTS -UPDATE


           }



    ?>
</div>



    <div class="container"><hr></div>



    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="patient.php"  class="btn btn-primary link_btn "  role="button" id="patientLinkPage" style="margin:1.5em 0">
        Patient 
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="ascendPatients.php"  class="btn btn-primary link_btn"  role="button" id="ascendPatientLinkPage">
     Ascend patients
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="descendPatients.php"  class="btn btn-primary link_btn"  role="button" id="descendPatientLinkPage" style="margin:1.5em 0">
     Descend patients
      </a>
    </div>

    
    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="allPatients.php"  class="btn btn-primary link_btn"  role="button" id="patientLinkPage">
      All  patients 
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
      
      
        <div class="container">
          <!-- collapse -->
          <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
              Toggle source links
            </button>
          </p>
        
          <div style="min-height: auto">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <div class="card card-body" style="width: 70%">
                
                <a  href="https://images.unsplash.com/photo-1609720597021-1498d6216a55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" target="_blank">Image</a><br>
                <a  href="https://images.unsplash.com/photo-1544991936-9464fa9919d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" target="_blank">Click image</a>
                
              </div>
            </div>
          </div>
          <!-- collapse -->
        </div>
      
      
      </footer>
   
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  
 

  </body>
</html>