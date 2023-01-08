<?php


//make form
//label cu for cand nu cuprinde in interior input-ul , for tre sa fie egal cu id

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 5 course</title>
</head>
<body>
    

<form action = "curs5.php" method="post">

<label>Email address:<br>
    <input type="email" name="email" value="<?php 
    //CA SA RAMANA BIFAT DE CATRE USER
    if( (isset($_post['email'])) ){
echo $_post['email'] ;
    }
    ?> " />
</label><br>


<label for="abc">Email address2:<br></label>
<input type="email" name="email2" id="abc" value=" <?php
//CA SA RAMANA BIFAT DE CATRE USER

if( isset($_POST['email2']) ){
    //CA SA RAMANA BIFAT DE CATRE USER
   echo $_POST['email2'] ;
}
?> " />

<br>
<label for="dateBirthday">Your birthday:<br>
    <input type="date" name="dateBirthday" id="dateBirthday" value=" <?php
    if( isset($_POST['dateBirthday']) ){
        //CA SA RAMANA BIFAT DE CATRE USER
       echo $_POST['dateBirthday'] ;
    }
    ?> " />
</label><br>



<label for="calatorii">Calatorii:</label>
<input type="checkbox" name="calatorii" id="calatorii" <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['calatorii']) ){
    echo 'checked="checked"' ;
}
?>  /><br>



<label for="sport">Sport:</label>
<input type="checkbox" name="sport" id="sport" <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['sport']) ){
    echo 'checked="checked"' ;
}
?> /><br>




<label for="citit">Citit:</label>
<input type="checkbox" name="citit"  id="citit"  <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['citit']) ){
    echo 'checked="checked"' ;
}
?> /><br>


<button type="submit" name="submit">submit</button>

</form>


</body>
</html>

<?php 

if( isset($_POST["submit"]) ){
echo '<h1 style="text-align:center ; color:green">adresa de email este :' . $_POST['email'] . '</h1>' ; 

echo '<h1 style="text-align:center ; color:yellowgreen">adresa de email2 este :' . $_POST['email2'] . '</h1>' ; 

echo '<h1 style="text-align:center ; color:gray">date este :' . $_POST['dateBirthday'] . '</h1>' ; 

if ( isset($_POST['calatorii'])){
    //folosesc if  ca sa verific daca bifa de calatorie a fost selectata
    //ca sa-mi afiseze pasiunea 'Calatorii' in loc de 'on'
    echo '<h1 style="text-align:center ; color:orange">pasiunea aleasa  este Calatorii </h1>' ; 
}

if ( isset($_POST['sport'])){
    //folosesc if  ca sa verific daca bifa de Sport a fost selectata
    //ca sa-mi afiseze pasiunea 'Sport' in loc de 'on'
    echo '<h1 style="text-align:center ; color:red">pasiunea aleasa  este Sport </h1>' ; 
}


if ( isset($_POST['citit'])){
    //folosesc if  ca sa verific daca bifa de Citit a fost selectata
    //ca sa-mi afiseze pasiunea 'Citit' in loc de 'on'
    echo '<h1 style="text-align:center ; color:yellow">pasiunea aleasa  este Citit </h1>' ; 
}




echo 'pasiunile alese sunt : ';


if ( isset($_POST['calatorii'])){
    //folosesc if  ca sa verific daca bifa de calatorie a fost selectata
    //ca sa-mi afiseze pasiunea 'Calatorii' in loc de 'on'
    echo 'calatorii' ; 
}

if ( isset($_POST['sport'])){
    //folosesc if  ca sa verific daca bifa de sport a fost selectata
    //ca sa-mi afiseze pasiunea 'sport' in loc de 'on'
    echo 'sport' ; 
}

if ( isset($_POST['citit'])){
    //folosesc if  ca sa verific daca bifa de citit a fost selectata
    //ca sa-mi afiseze pasiunea 'citit' in loc de 'on'
    echo 'citit' ; 
}
 

}


?>


