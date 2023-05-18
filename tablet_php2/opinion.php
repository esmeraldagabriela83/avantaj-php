<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>opinion.html</title>


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
  

      <!-- <a id="uppageOpinion" href="https://www.pexels.com/ro-ro/fotografie/abstract-imagini-abstracte-vitamine-farmacie-3683056/"  target="_blank">
        <img src="./images/pills_index.jpg" class="img-fluid" alt="index_image_pills" id="img_index">
      </a> -->


      <div id="img_opinion"></div>


      <div class="container">
        <h3 class="primary my-3">Opinion</h3>
          <hr>
      </div>

  
     <div class="container">
      <form id="opinion" action="opinion.php" method="POST">

        
       <div id="inputsOpinion">
            <div class="divInput">
            <label for="nameUser">Name</label><br>
              <input type="text" name="nameUser" class="form-control" id="nameUser" required>
            </div>
              
            <div class="divInput">
            <label for="emailUser">Email</label><br>
              <input type="email" name="emailUser" class="form-control" id="emailUser"  required>
            </div>
      
            <div class="divInput">
            <label for="phoneUser">Phone</label><br>
              <input type="tel" name="phoneUser" class="form-control" id="phoneUser"  required>
            </div>
        </div>
    
          <div>
            <label for="messageUser">Message</label><br>
              <textarea name="messageUser" class="form-control" id="messageUser"  required></textarea>
          </div>
    
    
    
    
    
      <button class="btn btn-success"
              type="submit"
              name="send_mail"
              id="submit" 
              style="margin-top:3em ; margin-bottom:1.5em">
      Submit Opinion Form 
      </button>
        
      </form>

<?php  
// https://github.com/esmeraldagabriela83/avantaj-php/blob/main/php-curs7/form.php
?>

    <!-- ------------------------- -->


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

        // afisam datele din formular

        // echo '<h5>Form data:</h5>';

      
        if(isset($_POST['send_mail'])){

        

      //2sent email when submit button
      $headers = 'From: tablet_php@mihaelagabriela.ro' . "\r\n" .
      // 'Reply-To: '. $_POST['email'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();


      mail('esmeraldagabriela83@yahoo.com' ,
      'Mail de pe opinion_php/patient.php' ,
      'NameUser of patient is: ' . $_POST['nameUser'] .
      ' emailUser :  ' . $_POST['emailUser'] .
      ' PhoneUser of patient:  ' . $_POST['phoneUser'] .
      ' MessageUser :  ' . $_POST['messageUser'] );

      //2sent email when submit button   

  }
   
        //---------------------------------------

           }



    ?>
</div>

    <!-- ------------------------- -->

      <p id="sentFormOpinion"></p>

     </div>


     <div class="container">
      <hr>
    </div>



    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="patient.php"  class="btn btn-primary link_btn "  role="button" id="patientLinkPage" style="margin:1.5em 0">
        Patient 
      </a>
    </div>


    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="editPatient.php"  class="btn btn-primary link_btn "  role="button" id="editPatientLinkPage" style="margin:1.5em 0">
        Edit patient 
      </a>
    </div>

    
    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="allPatients.php"  class="btn btn-primary link_btn"  role="button" id="patientLinkPage" style="margin:1.5em 0">
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

    <script src="javascript/opinion.js"></script>
 

  </body>
</html>