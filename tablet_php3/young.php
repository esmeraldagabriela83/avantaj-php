<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>young.php</title>


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

      <a id="uppage" href="https://images.pexels.com/photos/981619/pexels-photo-981619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="./images/young.jpg" class="img-fluid" alt="selectByAge_patients_image" id="ascend_img_patients">
      </a>

      <div class="container">
          <h1>Young</h1>
          <hr>
      </div>

   <div class="container">

   <?php

   //accesam baza de date
 //$c_db = mysqli_connect('localhost', 'root', '', 'patientdb');
 // $c_db = mysqli_connect('localhost', 'tfaudmsg_magazinmixt_user', '^4EfxA9+)7as', 'tfaudmsg_magazinmixt');
 
 $c_db = mysqli_connect('localhost', 'tfaudmsg_tablet_user', 'Dvx&Z+^,mj0{', 'tfaudmsg_tablet');
 
 // verificare conexiune
     if(mysqli_connect_errno()){
         echo 'NU s-a conectat la baza de date';
         exit;
     } else {
         echo '<h5>Successful connection</h5>' ;

//---------------------------------------

          //log in cu select
        // daca da - realizam un query SELECT pe baza de date
        $selectie_db = mysqli_query($c_db, "SELECT * FROM patienttable WHERE select_patient=1");




//informatia din patientdb
// prelucram raspunsul creand cate un array pentru fiecare rand returnat in urma query-ului
//  mysqli_fetch_assoc() -> creeaza un array asociativ pentru fiecare rand unde cheia este numele coloanei iar valoarea este exact valoarea din dreptului acelei coloane
// mysqli_fetch_assoc()  -> va returna false atunci cand nu mai sunt rezultate (daca sunt 0 rezultate sau dupa ultimul rand returnat)
// while se declanseaza in continuu atat timp cat declaratia dintre () este true - daca este false, se opreste
// $rez este variabila array pentru fiecare rand si este inventata de noi
while($rez =  mysqli_fetch_assoc($selectie_db)){

    echo '<ol class="container" 
    style="border:1px solid gray ;
     padding:1em;
     border-radius:10px ;
     background-color:floralwhite ;
     box-shadow: 1px 1px 3px #888888">';
echo '<li>id: '.  $rez['id'] . '</li>';
echo '<li>name: '.  $rez['name'] . '</li>';
echo '<li>select patient: '.  $rez['select_patient'] . '</li>';
echo '<li>email: '.  $rez['email'] . '</li>';
echo '<li>tel: ' . $rez['tel'] . '</li>';

echo '<li>age: ' . $rez['age'] . '</li>';
echo '<li>birth_date: ' . $rez['birth_date'] . '</li>';

echo '<li>comment: '.  $rez['comment'] . '</li>';

echo '<li>image: '.  $rez['image'] . '</li>';


echo '<li style="display:flex ; align-items:center ; justify-content:center">' ;
$ext = explode('.', $rez['image']);
$ext1 = count($ext)-1;
if (strtolower( $ext[$ext1]) != 'jpg' && strtolower( $ext[$ext1]) != 'jpeg' && strtolower( $ext[$ext1])!= 'png' && strtolower( $ext[$ext1])!= 'gif' && strtolower( $ext[$ext1])!= 'svg')
           echo '<a href="' . $rez['image'] . '" download>descarca</a>' ;
else
echo '<div style="margin-top:5em">';
           echo '<img src="' . $rez['image'] . '" alt="my-photo" style="height: 10em ; border-radius: 10px ; box-shadow: 1px 1px 3px #888888" />' ;
echo '</div>';
           echo '</li>' ;

echo '</ol>';


}
//informatia din patientdb

}


    
         

         ?>

   </div>

  

   <div class="container">
      <hr>
    </div>

    

   <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="patient.php"  class="btn btn-primary link_btn"  role="button" id="patientLinkPage">
        Patient
      </a>
    </div>

    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="allPatients.php"  class="btn btn-primary link_btn"  role="button" id="allPatientsLinkPage" style="margin:1.5em 0">
        All patients
      </a>
    </div>


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
                
      <a href="ascendPatients.php"  class="btn btn-primary link_btn"  role="button" id="ascendPatientsLinkPage" style="margin-bottom:1.5em 0">
        Ascend patients by age
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="descendPatients.php"  class="btn btn-primary link_btn"  role="button" id="descendPatientsLinkPage" style="margin:1.5em 0">
        Descend patients by age
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="ascendPatientName.php"  class="btn btn-primary link_btn"  role="button" id="ascendPatientNameLinkPage">
        Ascend patients by name
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="descendPatientName.php"  class="btn btn-primary link_btn"  role="button" id="descendPatientNameLinkPage" style="margin:1.5em 0">
        Descend patients by name
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="selectPatientsByAge.php"  class="btn btn-secondary link_btn"  role="button" id="selectPatientsByAgeLinkPage">
      Select patients by age
      </a>
    </div>

    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="selectPatientsAgeRange.php"  class="btn btn-secondary link_btn"  role="button" id="selectPatientsAgeRangeLinkPage" style="margin:1.5em 0">
      Select patients by age range
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

    <a href="#uppage" style=" position: fixed;
                              bottom: 0;
                              right: 0;
                              width: auto">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
        <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
      </svg>              
    </a> 
   
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>