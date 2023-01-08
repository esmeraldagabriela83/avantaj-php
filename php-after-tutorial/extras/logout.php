<?php

echo '<h1 style="color:gold ; text-align:center">hello from dashboard.php</h1>' ;

session_start();

// destroy the session
session_destroy();
header('Location: /php-after-tutorial/13_sessions.php');

?>