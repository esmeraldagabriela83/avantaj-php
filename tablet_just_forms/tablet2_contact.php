        

 
 
<a href="https://images.pexels.com/photos/3683081/pexels-photo-3683081.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  target="_blank">
        <img src="https://images.pexels.com/photos/3683081/pexels-photo-3683081.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
             class="img-fluid" 
             alt="tablet2_contact_image_form" 
             style="width:100% ; 
                    margin-top:-30%;
                    border-bottom:1px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;
                    border-radius:0.5em">
</a>




<form method="post" 
      style="margin:1em ;
             box-shadow: -1px 0 black, 0 1px gray, 1px 0 gray, 0 -1px gray;
             padding:3em;
             border:1px solid #198754;
             border-radius:0.5em">

<div id="inputsContact" style="display:flex; align-items:center; justify-content:center ; flex-wrap:wrap">


    <label for="name" style="margin:1em">Name<br>
      <input type="text" name="name" class="form-control" id="name"  
             style="margin:1em 0 ;
                    padding:1em 0 ;
                    width:20vw;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;" 
             required>
    </label><br>


    <label for="surname" style="margin:1em">Surname<br>
      <input type="text" name="surname" class="form-control" id="surname"  
             style="margin:1em 0 ;
                    padding:1em 0 ;
                    width:20vw;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;" 
             required>
    </label><br>

    
    <label for="age" style="margin:1em">Age<br>
      <input type="number" name="age" class="form-control" id="age"  
             style="margin:1em 0 ;
                    padding:1em 0;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"  
             required>
    </label><br>
      
    
    <label for="email" style="margin:1em">Email<br>
      <input type="email" name="email" class="form-control" id="email"  
             style="margin:1em 0 ; 
                    padding:1em 0 ; 
                    width:20vw;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"   
             required>
    </label><br>

    
    <label for="phone" style="margin:1em">Phone<br>
      <input type="tel" name="phone" class="form-control" id="phone"  
             style="margin:1em 0 ;
                    padding:1em 0;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"   
             required>
    </label><br>

    
    <label for="drName" style="margin:1em">Doctor<br>
      <input type="text" name="drName" class="form-control" id="drName"  
             style="margin:1em 0 ;
                    padding:1em 0 ;
                    width:20vw;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"   
             required>
    </label><br>

    
    <label for="disease" style="margin:1em">Disease<br>
      <input type="text" name="disease" class="form-control" id="disease"  
             style="margin:1em 0 ;
                    padding:1em 0 ;
                    width:20vw;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"   
             required>
    </label><br>

    
    <label for="medication" style="margin:1em">Medication<br>
      <input type="text" name="medication" class="form-control" id="medication"  
             style="margin:1em 0 ;
                    padding:1em 0 ;
                    width:20vw;
                    border:1 px solid #198754;
                    box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"   
             required>
    </label><br>

</div>


<div>
      <label for="message" style="margin:1em;">Message</label><br><br>
        <textarea name="message" class="form-control" id="message" 
                  style="margin:1em ;
                         padding:1em 0 ;
                         width:100%;  
                         border:1 px solid #198754;
                         box-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;"   
                  required></textarea><br>
</div>      



<button class="btn btn-success"
      type="submit"
      name="send_mail"
      id="submit" 
      style="margin-top:3em ;
             margin-bottom:1.5em ;
             margin-left:1em;
             padding:0.7em 0.5em; 
             background-color:#198754;
             font-weight:bold; 
             border-radius:0.5em;
             font-size:1.3rem;
             color: white;
             text-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;">
Submit Form Contact
</button>

</form>


<div class="container">
      <hr>
    </div>

<div class="container">
      <!-- <a href="contact.html">Contact</a><br> -->
                
      <a href="https://mihaelagabriela.ro/tablet_php3/index.html" target="_blank" class="btn btn-primary link_btn"  role="button" id="index.htmlLinkPage" 
         style="margin:1.5em;
                color:#198754;
                font-weight:bold ">
      https://mihaelagabriela.ro/tablet_php3/index.html
      </a>
    </div>
   
    <div class="container">
      <hr>
    </div>



<?php 
  
  if(isset($_POST['send_mail'])){

    //2sent email when submit button
    $headers = 'From: contact@mihaelagabriela.ro' . "\r\n" .
    'Reply-To: '. $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    mail('esmeraldagabriela83@yahoo.com' ,
    'Mail de pe tablet2_contact.php/tablet2_contact.php' ,
    'Name of patient is: ' . $_POST['name'] .
    'Surname of patient is: ' . $_POST['surname'] .
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
