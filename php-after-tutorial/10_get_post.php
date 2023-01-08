<?php 

echo '<h1 style="color:deeppink ; text-align:center">hello from 10_get_post.php</h1>' ;

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

?>

<a style="font-size:1.5rem ; color: tomato"
   href="https://images.unsplash.com/photo-1585238342024-78d387f4a707?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
   target="_blank">click to unsplash pizza photo</a><br>



<a style="font-size:1.5rem ; color: forestgreen"
   href="<?php echo $_SERVER['PHP_SELF'] ?>"
   target="_blank"
>click to the same localhoast page </a><br>



<?php 

echo $_GET['myName'];
echo $_GET['age'];
echo $_GET['catName'];

?>



<a style="font-size:1.5rem ; color: blue"
   href="<?php echo $_SERVER['PHP_SELF'] ; ?>? myName=George & age=74 & catName=Sofy"
   target="_blank"
>click to name , age and catName variables </a>


