<?php 

echo '<h1 style="color:deeppink ; text-align:center">hello from 10_get_post_second.php</h1>' ;

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

?>



<?php 
if (isset($_POST['submitInput'])) {

    echo $_POST['formName'];
    echo $_POST['formAge'];

} ?>





<form  style="border:3px solid green ; background-color:BlanchedAlmond ; padding:1em ; margin:1em"
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
