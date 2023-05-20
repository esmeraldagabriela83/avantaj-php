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

    <title>tabletContact.php</title>


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
   
     <!-- ---style css--- -->

    <!-- <link href="css/style.css" rel="stylesheet"> -->

    <style>
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style-type: none;
  }
  
  html {
    font-family: 'Nunito Sans', sans-serif;
  }

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*https://www.w3schools.com/css/css_rwd_mediaqueries.asp*/
  @media only screen and (max-width: 419px) {
    body{
        background-color: aliceblue;
    }

    .container{
        color:gray;
        font-size: 1.4rem;
        text-align: center;
    }

    hr{
      margin-bottom:1em;
      width:1000%;
    }

    #icons{
      display:flex;
      align-items: center;
      justify-content: space-between;
    }
    
  }

  @media only screen and (min-width: 420px) and (max-width: 1023px) {
    body{
        background-color: HoneyDew;
    }

    .container{
        color:SlateGray;
        font-size: 1.3rem;
        text-align: left;
    }

    hr{
      margin-bottom:1em;
      width:100%;
        }

        #icons{
          display:flex;
        }

  }

  @media only screen and (min-width: 1024px) {
    body{
        background-color: Ivory;
    }

    .container{
        color:darkgray;
        font-size: 1.2rem;
    }
    .container:hover{
        color:dimgray;
        transition-delay: 0.5s;
    }

    hr{
      margin-bottom:1em;
      width:50%;
      margin-left:0
    }

    #icons{
      display:flex;
    }

  }


  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
nav , button {
  box-shadow: 1px 1px 3px #888888; 
}



/*logo*/
nav strong{
    color:dimgray;
}

/*img index page*/

img {
    margin-top: -30%;
}

/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
.card{
  margin-top:3em;
  margin-bottom:3em;
  margin-left:2.5em;
  margin-right:2.5em;
}

/*hr pt separare    style="width:50%;text-align:left;margin-left:0"   */
/*https://www.w3schools.com/tags/tag_hr.asp*/




.footerIcons{
  font-size: 2rem;
  margin:0.3em;
}

/*--------------------------------------------------------------------------------------------------------------------------------*/

a.link_btn{
  box-shadow: 1px 1px 3px #888888;
}

/*--------map--------------------------------------------------------------------------------------------------------------------------------*/




@media only screen and (max-width: 959px) {
  #makeMap{
    position: relative;
    height: 15em;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: floralwhite;
  }
}

@media only screen and (min-width: 960px) {
  #makeMap{
    position: relative;
    height: 50vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-color: floralwhite; */
  }
}

#map {
   position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  /* margin: 0 1em; */
box-shadow: 1px 1px 3px #888888;
 }


/*------------map-----------------------------------------------------------------------------------------------------------------------------*/
    </style>

    <!-- ---style css--- -->

    <!-- ---------------styleContactForm---------- -->

    <!-- <link href="css/styleContactForm.css" rel="stylesheet"> -->

    <style>
        
/*------mobile---------*/

@media only screen and (max-width: 419px) {

form label input.form-control{
 width:17em;
 /* border:3px solid orange; */
}

form label input.form-control, form div textarea.form-control{
 background-color: LightCyan;  
}

}

/*------tablet---------*/

@media only screen and (min-width: 420px) and (max-width: 1023px) {

form label{
 margin:0.3em;
}

form label input.form-control{
 width:20em;
 /* border:3px solid darkmagenta; */
}

form label input.form-control, form div textarea.form-control{
 background-color: rgb(203, 254, 237) ;  
}

}


/*------screen---------*/

@media only screen and (min-width: 1024px) {

form label{
 margin:0.5em;
}

form div#inputsContact label input{
 /* border:3px solid yellowgreen; */
 width:35em;
}

/*----------------------------*/

form label input.form-control, form div textarea.form-control{
 background-color: OldLace  ; 
}

form label input.form-control:focus, form div textarea.form-control:focus{
 background-color: Moccasin  ;
 color: #495057;
}

}
    </style>

     <!-- ---------------styleContactForm---------- -->

</head>



  <body>

    <!-- localhost/avantaj-php/tablet_php -->

    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->

    <nav id="navbar-example2" class="navbar bg-light px-3">

      <div class="container">
        <a class="navbar-brand" href="https://mihaelagabriela.ro/tablet_php3/index.html" target="_blank">
          <strong>Tablet</strong><br><strong>Project</strong>
        </a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="https://mihaelagabriela.ro/tablet_php3/index.html" target="_blank">Pills</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Second</a>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sort</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://mihaelagabriela.ro/tablet_php3/alphabetical.html" target="_blank">Alphabetical</a></li>
              <li><a class="dropdown-item" href="https://mihaelagabriela.ro/tablet_php3/byPrice.html" target="_blank">By price</a></li>
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
        <img src="https://images.pexels.com/photos/3683094/pexels-photo-3683094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="antibiotics_img_carousel" style="width:100%">
      </a>
      <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark bg-body" style="padding:0.5em; border-radius:5px">Antibiotics</h5>  
          <a href="https://en.wikipedia.org/wiki/Antibiotic" target="_blank">
          <p style="color:dimgray" class="btn btn-info">
        An antibiotic is a type of antimicrobial substance active against bacteria.
        It is the most important type of antibacterial agent for fighting bacterial infections, and antibiotic medications are widely used in the treatment and prevention of such infections.[1][2] They may either kill or inhibit the growth of bacteria. A limited number of antibiotics also possess antiprotozoal activity.[3][4] Antibiotics are not effective against viruses such as the common cold or influenza;[5] drugs which inhibit growth of viruses are termed antiviral drugs or antivirals rather than antibiotics.
        They are also not effective against fungi; drugs which inhibit growth of fungi are called antifungal drugs.
        </p>
          </a>
      </div>
    </div>
    <div class="carousel-item">
      <a href="https://images.pexels.com/photos/1809341/pexels-photo-1809341.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="https://images.pexels.com/photos/1809341/pexels-photo-1809341.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="drugs_img_carousel" style="width:100%">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark bg-body" style="padding:0.5em; border-radius:5px">Drugs</h5>
        <a href="https://en.wikipedia.org/wiki/Drug" target="_blank">
        <p style="color:dimgray" class="btn btn-info">
        A drug is any chemical substance that causes a change in an organism's physiology or psychology when consumed.
        Drugs are typically distinguished from food and substances that provide nutritional support. Consumption of drugs can be via inhalation, injection, smoking, ingestion, absorption via a patch on the skin, suppository, or dissolution under the tongue.
        </p>
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <a href="https://images.pexels.com/photos/5723612/pexels-photo-5723612.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="https://images.pexels.com/photos/5723612/pexels-photo-5723612.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="insulin_img_carousel" style="width:100%">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark bg-body" style="padding:0.5em; border-radius:5px">Insulin</h5>
        <a href="https://en.wikipedia.org/wiki/Insulin" target="_blank">
        <p style="color:dimgray" class="btn btn-info">
         Insulin is a peptide hormone produced by beta cells of the pancreatic islets encoded in humans by the INS gene. 
         It is considered to be the main anabolic hormone of the body. It regulates the metabolism of carbohydrates, fats and protein by promoting the absorption of glucose from the blood into liver, fat and skeletal muscle cells.[8] In these tissues the absorbed glucose is converted into either glycogen via glycogenesis or fats (triglycerides) via lipogenesis, or, in the case of the liver, into both.[8]
         Glucose production and secretion by the liver is strongly inhibited by high concentrations of insulin in the blood.
        </p>
        </a>
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

   
      <hr>
  

    <div id="makeMap">
      <div id='map'></div>
    </div>

  </div>
  <!--map-->

<!-- map -->

  
    
<div class="container" style="margin-top:2em">
        
<form method="post">

    <div id="inputsContact">

    
        <label for="name">Name
          <input type="text" name="name" class="form-control" id="name" required>
        </label>

        
        <label for="age">Age
          <input type="number" name="age" class="form-control" id="age" required>
        </label>
          
        
        <label for="email">Email
          <input type="email" name="email" class="form-control" id="email"  required>
        </label>

        
        <label for="phone">Phone
          <input type="tel" name="phone" class="form-control" id="phone"  required>
        </label>

        
        <label for="drName">Doctor
          <input type="text" name="drName" class="form-control" id="drName"  required>
        </label>

        
        <label for="disease">Disease
          <input type="text" name="disease" class="form-control" id="disease"  required>
        </label>

        
        <label for="medication">Medication
          <input type="text" name="medication" class="form-control" id="medication"  required>
        </label>

    </div>


  <div>
          <label for="message">Message</label><br>
            <textarea name="message" class="form-control" id="message"  required></textarea><br>
  </div>      



  <button class="btn btn-success"
          type="submit"
          name="send_mail"
          id="submit" 
          style="margin-top:3em ; margin-bottom:1.5em">
  Submit Form Contact
  </button>

</form>

<?php 
// https://github.com/esmeraldagabriela83/avantaj-php/blob/main/php-curs7/form.php
?>

<!-- ---------------- -->


    <?php 
  
    if(isset($_POST['send_mail'])){

      //2sent email when submit button
      $headers = 'From: contact@mihaelagabriela.ro' . "\r\n" .
      'Reply-To: '. $_POST['email'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();


      mail('esmeraldagabriela83@yahoo.com' ,
      'Mail de pe contact_php/patient.php' ,
      'Name of patient is: ' . $_POST['name'] .
      ' Age :  ' . $_POST['age'] .
      ' Email of patient:  ' . $_POST['email'] .
      ' Phone of patient:  ' . $_POST['phone'] .
      ' DrName of patient:  ' . $_POST['drName'] .
      ' Disease of patient:  ' . $_POST['disease'] .
      ' Medication of patient:  ' . $_POST['medication'] .
      ' Message :  ' . $_POST['message'] );

      //2sent email when submit button   

  }
    ?>


<!-- ---------------- -->

        <p id="sentForm"></p>
        
</div>

    <div class="container">
      <hr>
    </div>

    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="https://mihaelagabriela.ro/tabletOpinion.php"  class="btn btn-primary link_btn "  role="button" id="opinionLinkPage" style="margin:1.5em 0">
        Opinion 
      </a>
    </div>

    <div class="container">
      <hr>
    </div>


<!-- ---------------- -->
   

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

    <!-- <p>
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
    </div> -->

    <!-- collapse -->

    </div>
   
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- ------------map.js---------------- -->

    <!-- <script src="javascript/map.js"></script> -->

    <script>
        console.log("hello from map.js");
//How To Use Mapbox To Create A Google Maps Clone Quickly
//https://www.youtube.com/watch?v=OySigNMXOZU

//https://account.mapbox.com/
//https://docs.mapbox.com/mapbox-gl-js/example/simple-map/

// TO MAKE THE MAP APPEAR YOU MUST
// ADD YOUR ACCESS TOKEN FROM
// https://account.mapbox.com
mapboxgl.accessToken = 'pk.eyJ1IjoibWloYWVsYS1hODMiLCJhIjoiY2wyajVnZXh2MDBibDNvcGs0eDE4dGpneSJ9.wgTo_KSlpIRdJ3F41QhrGA';

navigator.geolocation.getCurrentPosition(successLocation , errorLocation ,
{enableHighAccuracy:true}
)


function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {
  setupMap([-2.24, 53.48])
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15
  })

  const nav = new mapboxgl.NavigationControl()
  map.addControl(nav)

  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  })

  map.addControl(directions, "top-left")
}



//
    </script>

<!-- ------------map.js---------------- -->    

<!-- ----------------contact.js---------------------- -->

    <!-- <script src="javascript/contact.js"></script> -->

    <script>
        console.log("hello from contact js");

const sentForm=document.getElementById("sentForm");


//----

const name=document.getElementById("name");
console.log("name is : " , name);

const email =document.getElementById("email");
console.log("email is : " , email);


const message=document.getElementById("message");
console.log("message is " , message);


const submit=document.getElementById("submit");
console.log("submit is " , submit);




submit.addEventListener("click" , function(event){
    event.preventDefault();

    console.log("you clicked the submit btn");


    //----
console.log("name value is " , name.value);

console.log("email value is " , email.value);

console.log("message value is " , message.value);
    //----

    sentForm.innerText="sent form";

});

//----


    </script>

<!-- ----------------contact.js---------------------- -->    

<!-- --------------------contactMore.js-------------------- -->

    <!-- <script src="javascript/contactMore.js"></script> -->

    <script>
        console.log("hello from contactMore js");




//----

const age=document.getElementById("age");
console.log("age is : " , age);

const phone =document.getElementById("phone");
console.log("phone is : " , phone);


const drName=document.getElementById("drName");
console.log("drName is " , drName);


const disease=document.getElementById("disease");
console.log("disease is " , disease);


const medication=document.getElementById("medication");
console.log("medication is " , medication);




///---------------------------------


const submitMore=document.getElementById("submit");
console.log("submitMore is " , submit);

////------------------------------------


submitMore.addEventListener("click" , function(event){
    event.preventDefault();

    console.log("you clicked the submitMore / submit btn");


    //----
console.log("age value is " , age.value);

console.log("phone value is " , phone.value);

console.log("drName value is " , drName.value);

console.log("disease value is " , disease.value);

console.log("medication value is " , medication.value);
    //----



});

//----


    </script>
 
 <!-- --------------------contactMore.js-------------------- -->   

  </body>
</html>