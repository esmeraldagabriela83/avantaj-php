<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectForm.php</title>
    <link href="css/newstyle.css" rel="stylesheet">
</head>
<body>

<a href="projectForm.html"><h3 style="text-align:center">Get to the html home page</h3></a><br/>

<section class="section_common" id="section_one">

<h3 class="common_title">Complete form:</h3>

<form action="projectForm.php" method="post">

    <label for="username">Username:</label><br></br>
    <input type="text" name="username" id="username" value="<?php
                if (isset($_POST['username'])){
                    echo $_POST['username'];
                }
            ?>" /><br/>

    <label for="age">Age:</label><br></br>
    <input type="number" name="age" id="age" value="<?php
                    if (isset($_POST['age'])){
                        echo $_POST['age'];
                    }
                ?>" /><br/>


    <label for="phone">Phone:</label><br></br>
        <input type="tel" name="phone" id="phone" value="<?php
                        if (isset($_POST['phone'])){
                            echo $_POST['phone'];
                        }
                    ?>" /><br/>

    <label for="email">Email:</label><br></br>
            <input type="email" name="email" id="email" value="<?php
                            if (isset($_POST['email'])){
                                echo $_POST['email'];
                            }
                        ?>" /><br/>  
                        
    <label for="dateBirthday">DateBirthday:</label><br></br>
            <input type="date" name="dateBirthday" id="dateBirthday" value="<?php
                            if (isset($_POST['dateBirthday'])){
                                echo $_POST['dateBirthday'];
                            }
                        ?>" /><br/>  
                        
    <h3 class="common_title">Choose favorite hobbies</h3>
    
    <label for="trips">Trips:</label>
    <input type="checkbox" name="trips" id="trips" <?php
    //CA SA RAMANA BIFAT DE CATRE USER
    if( isset($_POST['trips']) ){
        echo 'checked="checked"' ;
    }
    ?>  /><br>                    

    <label for="swimming">Swimming:</label>
        <input type="checkbox" name="swimming" id="swimming" <?php
        //CA SA RAMANA BIFAT DE CATRE USER
        if( isset($_POST['swimming']) ){
            echo 'checked="checked"' ;
        }
        ?>  /><br>

    <label for="biking">Biking:</label>
            <input type="checkbox" name="biking" id="biking" <?php
            //CA SA RAMANA BIFAT DE CATRE USER
            if( isset($_POST['biking']) ){
                echo 'checked="checked"' ;
            }
            ?>  /><br>  
            
    <label for="walking">Walking:</label>
            <input type="checkbox" name="walking" id="walking" <?php
            //CA SA RAMANA BIFAT DE CATRE USER
            if( isset($_POST['walking']) ){
                echo 'checked="checked"' ;
            }
            ?>  /><br>         
    <label for="travelling">Travelling:</label>
            <input type="checkbox" name="travelling" id="travelling" <?php
            //CA SA RAMANA BIFAT DE CATRE USER
            if( isset($_POST['travelling']) ){
                echo 'checked="checked"' ;
            }
            ?>  /><br>

    <h3 class="common_title">Choose native language</h3>

    <?php
    $languages=array('Romanian' , 'English' , 'French' , 'Bulgarian' , 'Spanish') ;
    ?>

    <select name="language">
<?php
foreach($languages as $languageKeyIndex => $languageValue){

    if($_POST['language'] == $languageValue){
         echo '<option selected="selected" value="' . $languageValue . '" >' . $languageValue . '</option>' ;
    }else{
        echo '<option value="' . $languageValue . '" >' . $languageValue . '</option>' ;
    }

}
?>
            <!-- <option value="ro">Romanian</option>
            <option value="en">English</option>
            <option value="fr">French</option> -->
     </select>




     <h3 class="common_title">Choose favorite day</h3>

     <?php
        $days = array('Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday');
    ?>

<select name="day">
<?php
foreach($days as $dayKeyIndex => $dayValue){

    if($_POST['day'] == $dayValue){
        echo '<option selected="selected" value="' . $dayValue . '">' . $dayValue . '</option>' ;
    }else{
        echo '<option value="' . $dayValue . '">' . $dayValue . '</option>' ;
    }

}
?>
</select>



<h3 class="common_title">Choose age group</h3>

<input type="radio" name="ageRadio" value="minor"  <?php
            if (isset($_POST['ageRadio']) && $_POST['ageRadio'] == 'minor'){
                echo 'checked="checked"';
            }
        ?> /> 0-17 <br/>

<input type="radio" name="ageRadio" value="adult" 
        <?php
            if (isset($_POST['ageRadio']) && $_POST['ageRadio'] == 'adult'){
                echo 'checked="checked"';
            }
        ?>
        /> 18-60 <br/>

<input type="radio" name="ageRadio" value="elderly"  <?php
            if (isset($_POST['ageRadio']) && $_POST['ageRadio'] == 'elderly'){
                echo 'checked="checked"';
            }
        ?>/> 61+ <br/>



<label for="msg">Message</label><br></br>
<textarea name="msg" id="msg" rows="6" maxlength="70"><?php
            if (isset($_POST['msg'])){
                echo $_POST['msg'];
            }
        ?></textarea><br/>
<input type="checkbox" name="wordsNr" <?php
            //CA SA RAMANA BIFAT DE CATRE USER
            if( isset($_POST['wordsNr']) ){
                echo 'checked="checked"' ;
            }
            ?> />Display the number of words <br/>




<label for="pwd">Password:</label><br></br>
<input type="password" id="pwd" name="pwd" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['pwd'])){
   echo $_POST['pwd'];
}
?>
"><br></br>

<label for="pwd2">Password2:</label><br></br>
<input type="password" id="pwd2" name="pwd2" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['pwd2'])){
   echo $_POST['pwd2'];
}
?>
">






















            <a href="termsConditions.html"><h3 class="termsConditionsLink">Terms and conditions to read</h3></a><br/>
         
            <input type="checkbox" id="bifa" name="bifa" <?php
                if (isset($_POST['bifa'])){
                    echo 'checked="checked"';
                }
            ?>/>Terms and conditions to check<br/>

            <input type="submit" value="Log in" name="login" class="submitTag"/>

    </form>

</section>



<section>

<?php

if( isset($_POST['login']) && isset($_POST['bifa']) ){

   

if($_POST['pwd'] == $_POST['pwd2']){

    echo '<h3 class="phpH3data">Data of user</h3>' ;

    echo '<h3 class="phpH3data">Name is: ' . $_POST['username'] . '</h3>' ;

    echo '<h3 class="phpH3data">Age is: ' . $_POST['age'] . '</h3>' ;

    echo '<h3 class="phpH3data">Phone is: ' . $_POST['phone'] . '</h3>' ;

    echo '<h3 class="phpH3data">Email is: ' . $_POST['email'] . '</h3>' ;

    echo '<h3 class="phpH3data">DateBirthday is: ' . $_POST['dateBirthday'] . '</h3>' ;

    if(isset($_POST['trips'])){
     echo '<h3 class="phpH3data">One of your hobbies is: trips </h3>' ;
    }else{
     echo '<h3 class="phpH3dataNO">Trips are not one of your hobbies</h3>' ;
    }

    if(isset($_POST['swimming'])){
     echo '<h3 class="phpH3data">One of your hobbies is: swimming </h3>' ;
   }else{
     echo '<h3 class="phpH3dataNO">Swimming is not one of your hobbies</h3>' ;
   }

   if(isset($_POST['biking'])){
    echo '<h3 class="phpH3data">One of your hobbies is: biking </h3>' ;
   }else{
        echo '<h3 class="phpH3dataNO">Biking is not one of your hobbies</h3>' ;
   }

   if(isset($_POST['walking'])){
    echo '<h3 class="phpH3data">One of your hobbies is: walking </h3>' ;
   }else{
    echo '<h3 class="phpH3dataNO">Walking is not one of your hobbies</h3>' ;
   }

   if(isset($_POST['travelling'])){
    echo '<h3 class="phpH3data">One of your hobbies is: travelling </h3>' ;
   }else{
    echo '<h3 class="phpH3dataNO">Travelling is not one of your hobbies</h3>' ;
   }

   echo '<h3 class="phpH3data">Language is: ' . $_POST['language'] . '</h3>' ;

if($_POST['day'] === 'Monday' || $_POST['day'] === 'Tuesday' || $_POST['day'] === 'Wednesday' || $_POST['day'] === 'Thursday' || $_POST['day'] === 'Friday'){
    echo '<h3 class="phpH3dataNO">Favorite day ' . $_POST['day'] . ' is a working day </h3>' ; 
}else{
    echo '<h3 class="phpH3data">Favorite day ' . $_POST['day'] . ' is during the weekend </h3>' ;
}

    echo '<h3 class="phpH3data">Group age is: ' . $_POST['ageRadio'] . '</h3>' ;

    echo '<h3 class="phpH3data">Message is: ' . $_POST['msg'] . '</h3>' ;

    if(isset($_POST['wordsNr'])){
         $words=explode(' ' , $_POST['msg']) ;

         echo  '<h3 class="phpH3data">Message has ' . count($words) .  ' words  </h3>' ;
    }

   echo '<h3 class="phpH3data">Password is: ' . $_POST['pwd'] . '</h3>' ;













   echo '<h3 class="phpH3data">Checkbox is: ' . $_POST['bifa'] . '</h3>' ;





   $headers = 'From: contact@mihaelagabriela.ro' . "\r\n" .
   'Reply-To: '. $_POST['email'] . "\r\n" .
   'X-Mailer: PHP/' . phpversion();





   mail('esmeraldagabriela83@yahoo.com' , 
        'Mail de pe propriul site formCourse/form2.php' ,
        'username is: ' . $_POST['username'] . 
        ' user with age:  ' . $_POST['age'] . 
        ' user with phone:  ' . $_POST['phone'] .
        ' user with email:  ' . $_POST['email'] .
        ' user with dateBirthday:  ' . $_POST['dateBirthday'] .
        ' user with trips:  ' . $_POST['trips'] . 
        ' user with swimming:  ' . $_POST['swimming'] .
        ' user with biking:  ' . $_POST['biking'] .
        ' user with walking:  ' . $_POST['walking'] .
        ' user with travelling:  ' . $_POST['travelling'] .
        ' user with language:  ' . $_POST['language'] .
        ' user with day:  ' . $_POST['day'] .
        ' user with ageRadio:  ' . $_POST['ageRadio'] .
        ' user with msg:  ' . $_POST['msg'] .
        ' nr of words from msg:  ' . count($words) .
        ' user with password:  ' . $_POST['pwd'] );

}else{
    echo '<h3 class="phpH3dataNO">Passwords are not the same</h3>'  ; 
}



}

?>


</section>
    
</body>
</html>