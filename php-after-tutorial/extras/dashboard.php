<?php

echo '<h1 style="color:indigo ; text-align:center">hello from dashboard.php</h1>' ;


session_start();

if (isset($_SESSION['username'])) {
  echo '<h1>Welcome, ' . $_SESSION['username'] . '</h1>';
  echo '<a href="logout.php">Logout</a>';
} else {
  echo '<h1>Welcome, Guest</h1>';
  echo '<a href="/php-after-tutorial/13_sessions.php"
           target="_blank">Home , get back to 13_sessions.php</a>';
}

?>


<p>content page of user brad with password: password</p>
<img src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?auto=compress&cs=tinysrgb&w=1600"  alt="user-img-on-personal-age" width="20%"/>