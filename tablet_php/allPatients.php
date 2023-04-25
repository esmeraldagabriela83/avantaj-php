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
            <a class="nav-link" href="#scrollspyHeading1">Pills</a>
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

      <a href="https://images.pexels.com/photos/4386467/pexels-photo-4386467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="./images/patientsImg.jpg" class="img-fluid" alt="patients_image" id="img_patients">
      </a>

      <div class="container">
          <h1>Patients data</h1>
      </div>
      

    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->



  
   
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
     }
         //---------------------------------------

         ?>

   </div>

  





   <div style="padding:1.5em 0 1.5em 0 ; margin:1.5em 0 ; text-align:center">


<?php

//log in cu select
 // AFISAM din tabel datele introduse de user
 $selectie_db = mysqli_query($c_db, "SELECT * FROM patienttable");
        


 while($rez =  mysqli_fetch_assoc($selectie_db)){
     echo '<ol class="container" style="border:1px solid green ; padding:1em 0 ; border-radius:10px ; background-color:floralwhite ; box-shadow:1px 1.5px 1.5px gray">';
     echo '<li>id: '.  $rez['id'] . '</li>';
     echo '<li>name: '.  $rez['name'] . '</li>';
     echo '<li>select patient: '.  $rez['select_patient'] . '</li>';
     echo '<li>email: '.  $rez['email'] . '</li>';
     echo '<li>tel: ' . $rez['tel'] . '</li>';
   
     echo '<li>age: ' . $rez['age'] . '</li>';
     echo '<li>birth_date: ' . $rez['birth_date'] . '</li>';

     echo '<li>comment: '.  $rez['comment'] . '</li>';
     
     echo '<li>image: '.  $rez['image'] . '</li>';
     echo '</ol>';

     echo '<div style="display:flex ; align-items:center ; justify-content:center ; padding:1em">' ;
          $ext = explode('.', $rez['image']);
          $ext1 = count($ext)-1;
          if (strtolower( $ext[$ext1]) != 'jpg' && strtolower( $ext[$ext1]) != 'jpeg' && strtolower( $ext[$ext1])!= 'png' && strtolower( $ext[$ext1])!= 'gif' && strtolower( $ext[$ext1])!= 'svg')
                      echo '<a href="' . $rez['image'] . '" download>descarca</a>' ;
          else
                      echo '<img src="' . $rez['image'] . '" alt="my-photo" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />' ;
     echo '</div>' ;
 }



 // AFISAM din tabel datele introduse de user



?>


  </div>







    

   <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="patient.php"  class="btn btn-primary"  role="button" id="patienttLinkPage">
        Patient
      </a>
    </div>


    <div class="container">
        <hr>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="contact.php"  class="btn btn-primary"  role="button" id="contactLinkPage">
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