<?php 

/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

echo '<h1 style="color:skyblue ; text-align:center">hello from 11_sanitizing_inputs.php</h1>' ;

?>



<?php 
if (isset($_POST['submitInput'])) {

    echo $_POST['formName'];
    echo $_POST['formAge'];

} ?>





<form  style="border:3px solid tomato ; background-color:Lavender ; padding:1em ; margin:1em"
       action="<?php echo $_SERVER['PHP_SELF'] ?>" 
       method="POST">
    
       <div>
  <label>Name: </label>
  <input type="text" name="formName">
</div>
<br>
<div>
<label>Age: </label>
  <input type="text" name="formAge">
</div>
<br>
  <input type="submit" name="submitInput" value="Submit">
    
    </form>


    <?php 

echo '<h1 style="color:DimGray ; text-align:center">user name is '.  $_POST['formName'] .  ' and is: '  . $_POST['formAge'] . ' years old . </h1>' ;

?>



<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submitMyForm'])) {
  // $name = $_POST['email'];
  // $email = $_POST['email'];

  // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Sanitize data
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitize inputs
  $name = filter_input(INPUT_POST, 'nameMyForm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'emailMyForm', FILTER_SANITIZE_EMAIL);
  $age = filter_input(INPUT_POST, 'ageMyForm', FILTER_SANITIZE_EMAIL);

  // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
} ?>

<!-- Pass data through a form -->
<!-- php_self can be used for xss -->
<form   style="border:3px solid blue ; background-color:Khaki ; padding:1em ; margin:1em"
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
        method="POST">

  <label>Name: 
  <input type="text" name="nameMyForm">
  </label>
<br>


<label>Email: 
  <input type="email" name="emailMyForm">
  </label>
<br>


<label>Age: 
  <input type="number" name="ageMyForm">
  </label>
<br>


  <input type="submit" name="submitMyForm" value="Submit">

</form>


<?php

echo $name . '<br>' ;
echo $email . '<br>';
echo $age;

echo '<h1 style="color:gold ; text-align:center"> User ' .  $name . ' has email address: ' .  $email .  ' </h1>' ;
echo  '<h1 style="color:gold ; text-align:center"> User has ' . $age . ' years old . </h1>' ;

?>
