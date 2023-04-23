<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--map-->
  <!-- https://account.mapbox.com/ -->
  <!-- https://docs.mapbox.com/mapbox-gl-js/example/simple-map/ -->

  <!-- <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script> -->

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
 <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
 <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
 <link
   rel="stylesheet"
   href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
   type="text/css"
 />

  <!-- <style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style> -->
  <!--map-->

    <title>contact.php</title>


      <!--ion icons-->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <!--ion icons-->

    <!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

    <!-- google fonts -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>



  <body>

    <!-- localhost/avantaj-php/tablet_php -->

    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->

    <nav id="navbar-example2" class="navbar bg-light px-3">

      <div class="container">
        <a class="navbar-brand" href="index.html"><strong>Tablet</strong><br><strong>Project</strong></a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Pills</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Second</a>
          </li> -->

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

   

<!-- carousel -->
<!-- https://getbootstrap.com/docs/5.2/components/carousel/ -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="https://images.pexels.com/photos/3683094/pexels-photo-3683094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="./images/carousel1.jpg" class="d-block w-100" alt="antibiotics_img_carousel" style="width:100%">
      </a>
      <div class="carousel-caption d-none d-md-block">
          <h5 style="color:#0d6efd ; text-shadow: 1px 1px 3px #888888;">Antibiotics</h5>  
        <p style="color:dimgray" class="btn btn-info">
          An antibiotic is a type of antimicrobial substance active against bacteria. <br>
          It is the most important type of antibacterial agent for fighting bacterial infections, and antibiotic medications are widely used in the treatment and prevention of such infections.<br>
          They may either kill or inhibit the growth of bacteria. A limited number of antibiotics also possess antiprotozoal activity.
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="https://images.pexels.com/photos/1809341/pexels-photo-1809341.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="./images/carousel2.jpg" class="d-block w-100" alt="drugs_img_carousel" style="width:100%">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:#0d6efd ; text-shadow: 1px 1px 3px #888888;">Drugs</h5>
        <p style="color:dimgray" class="btn btn-info">
          There are many hundreds of thousands of possible drugs.<br>
          Any chemical substance with biological activity may be considered a drug. This list categorises drugs alphabetically and also by other categorisations.
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="https://images.pexels.com/photos/5723612/pexels-photo-5723612.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="./images/carousel3.jpg" class="d-block w-100" alt="insulin_img_carousel" style="width:100%">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:#0d6efd ; text-shadow: 1px 1px 3px #888888;">Insulin</h5>
        <p style="color:dimgray" class="btn btn-info">
          Insulina este un hormon, secretat de celulele beta ale pancreasului, ce participă la metabolismul glucidelor. <br>
          Insulina este cel mai important hormon în metabolismul glucidelor. Insulina contribuie în primul rând la micșorarea concentrației glucozei în sânge.<br>
          Aceasta mărește permeabilitatea membranei celulare pentru glucoză. Insulina are o acțiunea antagonistă glucagonului.
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- carousel -->

<!-- map -->

  <!--map-->
  <div class="container">
    <h3 class="primary my-3">Find us on the map</h3>

    <div id="makeMap">
      <div id='map'></div>
    </div>

  </div>
  <!--map-->

<!-- map -->

    <div class="container">
      <hr>
    </div>
    
      <div class="container">
        
<form action="contact.html" method="POST">

  <label for="name">Name</label><br>
  <input type="text" name="name" class="form-control" id="name" required>

  <label for="email">Email</label><br>
  <input type="email" name="email" class="form-control" id="email"  required>

  <label for="message">Message</label><br>
  <textarea name="message" class="form-control" id="message"  required></textarea>



  <button class="btn btn-primary"
          type="submit"
          name="send_mail"
          id="submit" 
          style="margin-top:3em ; margin-bottom:1.5em">
  Submit Form
  </button>

</form>


<?php

// https://github.com/esmeraldagabriela83/avantaj-php/blob/main/php-curs7/form.php

if (isset($_POST['send_mail'])){
 
  $headers = 'From: contact@mihaelagabriela.ro' . "\r\n" .
  'Reply-To: '. $_POST['email'] . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail('esmeraldagabriela83@yahoo.com' , 'Mail de pe tablet_php site' , $_POST['name'] . 
                                         ' hello from user with email:  ' . $_POST['email'] . 
                                         ' message from user: ' . $_POST['message']);
}

?>


        <hr>

        <p id="sentForm"></p>
        

      </div>

      <!-- 

        wordpress:
        Web3forms - cheap, light and fast contact form for your website

        https://getbootstrap.com/docs/5.2/forms/validation/#custom-styles
        
        How to send mail from HTML without using JavaScript? | Using Formspree  
        https://www.youtube.com/watch?v=w9CdrXfjdLw&t=16s -->

   

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
      
      <!-- https://getbootstrap.com/docs/5.2/components/collapse/ -->

    <!-- collapse -->
    <p>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
        Toggle source links
      </button>
    </p>

    <div style="min-height: auto">
      <div class="collapse collapse-horizontal" id="collapseWidthExample">
        <div class="card card-body" style="width: 70%">
          <a href="https://en.wikipedia.org/wiki/Antibiotic" target="_blank">Antibiotics</a>
          <a href="https://en.wikipedia.org/wiki/Lists_of_drugs" target="_blank">Drugs</a>
          <a href="https://ro.wikipedia.org/wiki/Insulin%C4%83" target="_blank">Insulin</a>
        </div>
      </div>
    </div>
    <!-- collapse -->

    </div>
   
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="javascript/map.js"></script>

    <script src="javascript/contact.js"></script>
 

  </body>
</html>