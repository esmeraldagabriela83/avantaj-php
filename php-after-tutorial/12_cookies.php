<?php

echo '<h1 style="color:LimeGreen ; text-align:center">hello from 12_cookies.php</h1>' ;

/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie

setcookie('name', 'Alex', time() + 86400 * 30); // 86400 = 1 day

// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];

  echo '<h1>name is : ' .  $_COOKIE['name'] .  '</h1>'  ;
}



// Delete a cookie // activate next line
//setcookie('name', '', time() - 86400);





?>