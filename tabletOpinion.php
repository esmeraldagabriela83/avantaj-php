<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tabletOpinion.html</title>


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
    
    <!-- --------style.css---------- -->
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

   </style>
 <!-- --------style.css---------- -->

 <!-- --------------opinion------------------ -->
   
    <!-- <link href="css/opinion.css" rel="stylesheet"> -->

    <style>
        


/*---------------------------------------------------------------------------------------*/

@media only screen and (max-width: 419px) {
    form#opinion #inputsOpinion div.divInput{
     
        /* border:3px solid yellow; */
    }

    /*------------------------------------------*/

    form#opinion #inputsOpinion{
        /* border:3px solid red; */
    
        display:block;
    }

}

/*---------------------------------------------*/

@media only screen and (min-width: 420px) and (max-width: 1023px) {
    form#opinion #inputsOpinion div.divInput{
      
        /* border:3px solid cornflowerblue; */
    }

    /*-------------------------------------------*/

    form#opinion #inputsOpinion{
        /* border:3px solid red; */
    
        display:block;
    }

}

/*---------------------------------------------*/

@media only screen and (min-width: 1024px) {
    form#opinion #inputsOpinion div.divInput{
        width:33%;
        /* border:3px solid darkcyan; */
    }

    /*-----------------------------*/

    form#opinion #inputsOpinion{
        /* border:3px solid red; */
    
        display:flex;
        align-items: center;
        justify-content: space-between;
    }

}

    </style>
<!-- --------------opinion------------------ -->

</head>



  <body>

    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->



    <!-- https://getbootstrap.com/docs/5.2/components/scrollspy/#how-it-works -->

    <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">

        <div class="container">
          <a class="navbar-brand" href="https://mihaelagabriela.ro/tablet_php3/index.html" target="_blank">
            <strong>Tablet</strong><br><strong>Project</strong>
          </a>
          
          <ul class="nav nav-pills">

            <li class="nav-item">
              <a class="nav-link" href="https://mihaelagabriela.ro/tablet_php3/index.html" target="_blank">Pills</a>
            </li>
  
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
  
<!-- 
      <a id="uppageOpinion" href="https://www.pexels.com/ro-ro/fotografie/sticla-pahar-farmaceutic-transparent-4021781/"  target="_blank">
        <img src="https://www.pexels.com/ro-ro/fotografie/sticla-pahar-farmaceutic-transparent-4021781/" 
             class="img-fluid" alt="index_image_pills" id="img_index" style="width:100% ; border:3px solid red">
      </a> -->


      
        <div id="img_opinion"></div>
     


      <div class="container">
        
        <a href="https://images.pexels.com/photos/4021781/pexels-photo-4021781.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" target="_blank">
        <p>Source image</p>
        </a>

        <h3 class="primary my-3">Opinion</h3>

          <hr>
          
      </div>

  
<div class="container">
      <form id="opinion" method="post">

        
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


    <?php 
    
    if(isset($_POST['send_mail'])){

      //2sent email when submit button
      $headers = 'From: contact@mihaelagabriela.ro' . "\r\n" .
      'Reply-To: '. $_POST['emailUser'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();


      mail('esmeraldagabriela83@yahoo.com' ,
      'Mail de pe opinion_php/patient.php' ,
      'NameUser of patient is: ' . $_POST['nameUser'] .
      ' emailUser :  ' . $_POST['emailUser'] .
      ' PhoneUser of patient:  ' . $_POST['phoneUser'] .
      ' MessageUser :  ' . $_POST['messageUser'] );
      //2sent email when submit button   
  }

    ?>


    <!-- ------------------------- -->

      <p id="sentFormOpinion"></p>

</div>


    <div class="container">
      <hr>
    </div>

    <div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="https://mihaelagabriela.ro/tabletContact.php"  class="btn btn-primary link_btn "  role="button" id="contactLinkPage" style="margin:1.5em 0">
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

<!-- -------opinion.js--------- -->

    <!-- <script src="javascript/opinion.js"></script> -->

<script>
    console.log("hello from opinion.js");

const img_opinion=document.getElementById("img_opinion");

console.log("img_opinion is : " , img_opinion);




//img_opinion.style.backgroundImage="url(./images/opinion.jpg)";
img_opinion.style.backgroundImage="url(https://images.pexels.com/photos/4021781/pexels-photo-4021781.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)";
img_opinion.style.height="100vh";
img_opinion.style.width="100vw";
img_opinion.style.padding="1em";
img_opinion.style.backgroundColor="#198754";
img_opinion.style.backgroundRepeat="no-repeat";
img_opinion.style.backgroundPosition="center";
img_opinion.style.backgroundSize="cover";
// img_opinion.style.border="3px solid yellow";
img_opinion.style.marginTop="-30vh";


//click

img_opinion.addEventListener("click" , function(event){
event.preventDefault();

console.log("you clicked the img");

this.style.backgroundImage="url(./images/click_terms_cond.jpg)";

this.style.height="100vh";
this.style.width="100vw";
this.style.padding="1em";
this.style.backgroundColor="#198754";
this.style.backgroundRepeat="no-repeat";
this.style.backgroundPosition="center";
this.style.backgroundSize="cover";
// this.style.border="3px solid violet";

});


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const nameUser=document.getElementById("nameUser");
console.log("nameUser is:" , nameUser);
///

const emailUser=document.getElementById("emailUser");
console.log("emailUser is:" , emailUser);
///

const phoneUser=document.getElementById("phoneUser");
console.log("phoneUser" , phoneUser);
///

const messageUser=document.getElementById("messageUser");
console.log("messageUser" , messageUser);
///


const submit=document.getElementById("submit");
console.log("submit" , submit);
///

const sentFormOpinion=document.getElementById("sentFormOpinion");
console.log("sentFormOpinion is : " ,sentFormOpinion );
///



submit.addEventListener("click" , function(event){
    event.preventDefault();

    console.log("nameUser value is : " , nameUser.value);
    console.log("emailUser value is : " , emailUser.value);
    console.log("phoneUser value is : " , phoneUser.value);
    console.log("messageUser value is : " , messageUser.value);

    sentFormOpinion.innerText="Sent form";

});



</script>

<!-- -------opinion.js--------- --> 

  </body>
</html>