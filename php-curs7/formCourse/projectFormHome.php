<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectForm.html</title>
    <link href="css/mystyle.css" rel="stylesheet">
</head>
<body>

<h3 class="common_title">Home page with PHP project</h3>


<a href="projectForm.php"><h3 style="text-align:center">Get to the php page with form for user data</h3></a><br/>

<section style="background-color: Aquamarine">

    <form action="projectFormHome.php" method="POST" class="section_common">







        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="
        <?php
        if(isset($_POST['name'])){echo  $_POST['name'] ;}
        ?>
        " required/>

        <label for="email">Email</label>
        <input type="email" name="email" id="name" value="
        <?php
        if(isset($_POST['email'])){echo  $_POST['email'] ;}
        ?>
        " required/>

        <label for="phone">Telephone number</label>
        <input type="tel" name="phone" id="phone" value="
        <?php
        if(isset($_POST['phone'])){echo  $_POST['phone'] ;}
        ?>
        " required/>





        <p style="margin:1em">Prices are in RON</p>



<!-- product1 -->
        <h3 style="margin-bottom:1em">Product 1 price: 500 RON</h3>
        <a style="display:flex ; align-items:center ; justify-content:center"
           href="https://images.pexels.com/photos/4041392/pexels-photo-4041392.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
           target="_blank"><img src="./images/product1.jpg" alt="product1Img" class="imgHome"/></a>

        <label for="nrOfProduct1Items">How many of product1 do you want:</label><br></br>
    <input type="number" name="nrOfProduct1Items" id="nrOfProduct1Items" value="<?php
                    if (isset($_POST['nrOfProduct1Items'])){
                        echo $_POST['nrOfProduct1Items'];
                    }
                ?>" /><br/>

<!-- product1 -->




<!-- product2 -->
<h3 style="margin-bottom:1em">Product 2 price: 300 RON</h3>
        <a style="display:flex ; align-items:center ; justify-content:center"
           href="https://images.pexels.com/photos/2928381/pexels-photo-2928381.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
           target="_blank"><img src="./images/product2.jpg" alt="product2Img" class="imgHome"/></a>

        <label for="nrOfProduct2Items">How many of product2 do you want:</label><br></br>
    <input type="number" name="nrOfProduct2Items" id="nrOfProduct2Items" value="<?php
                    if (isset($_POST['nrOfProduct2Items'])){
                        echo $_POST['nrOfProduct2Items'];
                    }
                ?>" /><br/>

<!-- product2 -->


<!-- product3 -->
<h3 style="margin-bottom:1em">Product 3 price: 700 RON</h3>
        <a style="display:flex ; align-items:center ; justify-content:center"
           href="https://images.pexels.com/photos/7814649/pexels-photo-7814649.jpeg"
           target="_blank"><img src="./images/product3.jpg" alt="product3Img" class="imgHome"/></a>

        <label for="nrOfProduct3Items">How many of product3 do you want:</label><br></br>
    <input type="number" name="nrOfProduct3Items" id="nrOfProduct3Items" value="<?php
                    if (isset($_POST['nrOfProduct3Items'])){
                        echo $_POST['nrOfProduct3Items'];
                    }
                ?>" /><br/>

<!-- product3 -->



    


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


        <input type="submit" value="Send" name="send" class="submitTag"/>

    </form>

</section>

<section style="background-color: Aqua">
    
    <?php








//accesam baza de date de pe localhost my computer server
//it works 
//$c_db = mysqli_connect('localhost', 'root', '', 'local_formcourse');



//accesam baza de date de pe domeniu mihaelagabriela.ro
$c_db = mysqli_connect('localhost', 'tfaudmsg_userformcourse', 'Yi{3QtHy@lWp', 'tfaudmsg_formcourse');




// verificare conexiune
if(mysqli_connect_errno()){
    echo 'NU s-a conectat la baza de date';
    exit;
} else {
    echo '<h3 style="text-align:center ; color:DarkGoldenRod">Conexiune cu succes</h3>';

    echo '<h3 style="text-align:center ; color:DarkGoldenRod">Afisare date formular:</h3>';

//conecsiune cu succes

if( isset($_POST['send']) && isset($_POST['bifa']) ){
    if($_POST['pwd'] == $_POST['pwd2']){

        echo '<h3 class="phpH3data">Data of user</h3>' ;

        echo '<h3 style="text-align:center ; margin:1em">Buyer: ' . $_POST['name'] . '</h3>' ;


        if($_POST['nrOfProduct1Items'] !== ""){
            echo '<h3 style="text-align:center ; margin:1em ; color:SeaGreen">You commanded products 1 for ' . $_POST['nrOfProduct1Items'] . ' times and the value of them is : ' . $_POST['nrOfProduct1Items'] * 500 .' RON</h3>' ;
        }else{
            echo '<h3 style="text-align:center ; margin:1em ; color:Sienna">You have not selected any product of this type: product 1</h3>' ;
        }

        

        if($_POST['nrOfProduct2Items'] !== ""){
            echo '<h3 style="text-align:center ; margin:1em ; color:SeaGreen">You commanded products 2 for ' . $_POST['nrOfProduct2Items'] . ' times and the value of them is : ' . $_POST['nrOfProduct2Items'] * 300 .' RON</h3>' ;
        }else{
            echo '<h3 style="text-align:center ; margin:1em ; color:Sienna">You have not selected any product of this type: product 2</h3>' ;
        }



        if($_POST['nrOfProduct3Items'] !== ""){
            echo '<h3 style="text-align:center ; margin:1em ; color:SeaGreen">You commanded products 3 for ' . $_POST['nrOfProduct3Items'] . ' times and the value of them is : ' . $_POST['nrOfProduct3Items'] * 700 .' RON</h3>' ;
        }else{
            echo '<h3 style="text-align:center ; margin:1em ; color:Sienna">You have not selected any product of this type: product 3</h3>' ;
        }

        

     

                    $total=floatval($_POST['nrOfProduct1Items']) * 500 + floatval($_POST['nrOfProduct2Items']) * 300 + floatval($_POST['nrOfProduct3Items']) * 700 ;
                    echo '<h3 style="text-align:center ; margin:1em ; color:SeaGreen">Total cost: ' . $total . ' RON</h3>' ;

      


        echo '<h3 style="text-align:center">Checkbox for terms and conditions is: ' . $_POST['bifa'] . '</h3>' ;



//email()

    
$headers = 'From: projectFormHome@mihaelagabriela.ro' . "\r\n" .
'Reply-To: '. $_POST['email'] . "\r\n" .
'X-Mailer: PHP/' . phpversion();


mail('esmeraldagabriela83@yahoo.com' ,
                'Mail de pe projectFormHome.php' ,
                'Name user is: ' . $_POST['name'] .
                ' User with email:  ' . $_POST['email'] .
                ' User with phone:  ' . $_POST['phone'] .
                ' User with password:  ' . $_POST['pwd'] .
                ' nr of product1 items:  ' . $_POST['nrOfProduct1Items'] .
                ' nr of product2 items:  ' . $_POST['nrOfProduct2Items'] .
                ' nr of product3 items:  ' . $_POST['nrOfProduct3Items'] .
                ' total cost in RON:  ' . $total .         
                ' bifa:  ' . $_POST['bifa']);



//email()


//curs9

// INSERAM in tabel


$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['phone'];

$product1 = $_POST['nrOfProduct1Items'];
$product2 = $_POST['nrOfProduct2Items'];
$product3 = $_POST['nrOfProduct3Items'];

$password = $_POST['pwd'];


// INSERAM in tabel


//register cu insert
// pasul 4.2 - inseram variabilele cu informatii din formular in baza de date
mysqli_query($c_db, 
  "INSERT INTO local_formcourse_table (name , email, phone , product1, product2, product3,  password)
   VALUES ('$name' , '$email' , '$tel', '$product1' , '$product2' , '$product3' , '$password')");

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


<section style="background-color: LemonChiffon">

<?php

//log in cu select
 // AFISAM din tabel datele introduse de user
 $selectie_db = mysqli_query($c_db, "SELECT * FROM local_formcourse_table");


 while($rez =  mysqli_fetch_assoc($selectie_db)){
    echo '<ol style="text-align:center; 
                     border:1px solid green ;
                     padding:1em 0;
                     margin:1em 0  ;
                     border-radius:2.5px ;
                     background-color:floralwhite ;
                     box-shadow:1px 1.5px 1.5px gray">';

    echo '<li>id: '.  $rez['id'] . '</li>';
    echo '<li>name: '.  $rez['name'] . '</li>';
    echo '<li>email: '.  $rez['email'] . '</li>';
    echo '<li>phone: '.  $rez['phone'] . '</li>';
    echo '<li>product1: '.  $rez['product1'] . '</li>';
    echo '<li>product2: '.  $rez['product2'] . '</li>';
    echo '<li>product3: '.  $rez['product3'] . '</li>';
    echo '<li>password: '.  $rez['password'] . '</li>';

    echo '</ol>';
}


 // AFISAM din tabel datele introduse de user


 ?>

</section>


</body>

</body>

</body>
</html>


