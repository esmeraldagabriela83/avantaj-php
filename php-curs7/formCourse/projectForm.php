<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectForm.php</title>
    <link href="css/mystyle.css" rel="stylesheet">
</head>
<body>

<h3 class="common_title">Complete form to get user data</h3>

<a href="projectFormHome.php"><h3 style="text-align:center">Get to the php home page</h3></a><br/>

<section class="section_common" id="section_one">



<form action="projectForm.php" method="post" enctype="multipart/form-data">

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

<input type="radio" name="ageRadio" value="young"  <?php
            if (isset($_POST['ageRadio']) && $_POST['ageRadio'] == 'young'){
                echo 'checked="checked"';
            }
        ?> /> young <br/>

<input type="radio" name="ageRadio" value="adult" 
        <?php
            if (isset($_POST['ageRadio']) && $_POST['ageRadio'] == 'adult'){
                echo 'checked="checked"';
            }
        ?>
        /> adult <br/>

<input type="radio" name="ageRadio" value="old"  <?php
            if (isset($_POST['ageRadio']) && $_POST['ageRadio'] == 'old'){
                echo 'checked="checked"';
            }
        ?>/> old <br/>



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




<label for="pwd">Password(only numbers):</label><br></br>
<input type="password" id="pwd" name="pwd" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['pwd'])){
   echo $_POST['pwd'];
}
?>
"><br></br>

<label for="pwd2">Password2(only numbers):</label><br></br>
<input type="password" id="pwd2" name="pwd2" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['pwd2'])){
   echo $_POST['pwd2'];
}
?>
">











<input type="file" name="fisier" id="fi" style="border: 2.5px solid DarkGoldenRod;
                                                                         border-radius: 5px;
                                                                         font-size: 14px;
                                                                         padding: 10px;
                                                                         width: 100%;
                                                                         display:none" /><br/>

        <label for="fi">
        <img src="./images/upload2.png" style="height:2.5em ;
                                             margin:0.5em ;
                                             border-radius: 10px;
                                             box-shadow: 1px 1px 1.5px 1.5px gray;"/><br>
        Add your  image or a file
        </label><br>














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




//accesam baza de date localhost
//it works 
//$c_db_ex = mysqli_connect('localhost', 'root', '', 'local_portfolio_ex_database');





//accesam baza de date de pe domeniu mihaelagabriela.ro
$c_db_ex = mysqli_connect('localhost', 'tfaudmsg_userinfo', 'b}-^Ui=)kQAW', 'tfaudmsg_information');









// verificare conexiune
    if(mysqli_connect_errno()){
        echo 'NU s-a conectat la baza de date';
        exit;
    } else {
        echo '<h3 class="phpH3data">Conexiune cu succes</h3>' ;



//conecsiune cu succes
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
    
    
    
    
    
       $fisierul = $_FILES['fisier'];
                      // print_r($fisierul);
                      // echo '<br>' ;
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
                        echo '<div style="display:flex ; align-items:center ; justify-content:center ; padding:1em">' ;
                          echo '<img src="' .$nume_nou . '" alt="my-photo2" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />' ;
                        echo '</div>' ;
                  }  else{
                    echo '<div style="display:flex ; align-items:center ; justify-content:center ; padding:1em">' ;
                      echo '<a href="' . $nume_nou . '" target="_blank">view FILE</a>';
                    echo '</div>' ;  
                  }
    
    
    
    
    
       echo '<h3 class="phpH3data">Checkbox for terms and conditions is: ' . $_POST['bifa'] . '</h3>' ;
    
    
    
    
    
       $headers = 'From: projectForm@mihaelagabriela.ro' . "\r\n" .
       'Reply-To: '. $_POST['email'] . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
    
    
       $trips= '0';
       if(isset($_POST['trips'])){
        $trips= '1';
       } 
    
       $swimming= '0';
       if(isset($_POST['swimming'])){
        $swimming= '1';
       }
    
       $biking= '0';
       if(isset($_POST['biking'])){
        $biking= '1';
       }
    
       $walking= '0';
       if(isset($_POST['walking'])){
        $walking= '1';
       }
    
       $travelling= '0';
       if(isset($_POST['travelling'])){
        $travelling= '1';
       }
    
    
       mail('esmeraldagabriela83@yahoo.com' , 
            'Mail de pe propriul site formCourse/projectForm.php' ,
            'Username is: ' . $_POST['username'] . 
            ' User with age:  ' . $_POST['age'] . 
            ' User with phone:  ' . $_POST['phone'] .
            ' User with email:  ' . $_POST['email'] .
            ' User with dateBirthday:  ' . $_POST['dateBirthday'] .
    
            ' User with trips:  ' . $trips . 
            ' User with swimming:  ' . $swimming .
            ' User with biking:  ' . $biking .
            ' User with walking:  ' . $walking .
            ' User with travelling:  ' . $travelling .
    
            ' User with language:  ' . $_POST['language'] .
            ' User with day:  ' . $_POST['day'] .
            ' User with ageRadio:  ' . $_POST['ageRadio'] .

            ' User with message:  ' . $_POST['msg'] .

            // ' nr of words from msg:  ' . count($words) .
            ' User with password:  ' . $_POST['pwd'] );




    //curs9

// INSERAM in tabel


$name = $_POST['username'];
$age = $_POST['age'];
$tel = $_POST['phone'];
$email = $_POST['email'];
$datebirthday = $_POST['dateBirthday'];

$language = $_POST['language'];
$day = $_POST['day'];

$ageradio = $_POST['ageRadio'];

$comment = $_POST['msg'];

$password = $_POST['pwd'];

$image = $nume_nou;

//register cu insert
// pasul 4.2 - inseram variabilele cu informatii din formular in baza de date
mysqli_query($c_db_ex, 
  "INSERT INTO local_portfolio_ex_table (name, age , tel, email, datebirthday, trips, swimming, biking ,walking, travelling, language, day, ageradio, comment , password , image )
   VALUES ('$name' , '$age' , '$tel', '$email', '$datebirthday', '$trips', '$swimming', '$biking' , '$walking' , '$travelling', '$language', '$day', '$ageradio', '$comment', '$password', '$image')");

// end INSERARE in tabel

//curs9
        



    
    }else{
        echo '<h3 class="phpH3dataNO">Passwords are not the same</h3>'  ; 
    }
    
    
    
    }


//conecsiune cu succes



    }


?>


</section>



<section style="background-color:LightBlue">

<?php 


//log in cu select
 // AFISAM din tabel datele introduse de user
 $selectie_db_ex = mysqli_query($c_db_ex, "SELECT * FROM local_portfolio_ex_table");



 while($rez =  mysqli_fetch_assoc($selectie_db_ex)){
    echo '<ol style="border:1px solid green ;
                     padding:1em 0 ; 
                     margin:1em 0;
                     text-align:center;
                     border-radius:5px ;
                     background-color:floralwhite ; 
                     box-shadow:1px 1.5px 1.5px gray">';
    echo '<li>id: '.  $rez['id'] . '</li>';
    echo '<li>username: '.  $rez['name'] . '</li>';
    echo '<li>age: '.  $rez['age'] . '</li>';
    echo '<li>tel: '.  $rez['tel'] . '</li>';
    echo '<li>email: '.  $rez['email'] . '</li>';
    echo '<li>datebirthday: ' . $rez['datebirthday'] . '</li>';


    echo '<li>trips: '.  $rez['trips'] . '</li>';
    echo '<li>swimming: '.  $rez['swimming'] . '</li>';
    echo '<li>biking: '.  $rez['biking'] . '</li>';
    echo '<li>walking: '.  $rez['walking'] . '</li>';
    echo '<li>travelling: '.  $rez['travelling'] . '</li>';

    echo '<li>language: '.  $rez['language'] . '</li>';
    echo '<li>day: '.  $rez['day'] . '</li>';
    echo '<li>ageradio: '.  $rez['ageradio'] . '</li>';

    echo '<li>comment: '.  $rez['comment'] . '</li>';

    echo '<li>password: '.  $rez['password'] . '</li>';
 
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

</section>


    
</body>
</html>