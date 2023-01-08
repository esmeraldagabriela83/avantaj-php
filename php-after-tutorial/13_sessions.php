<?php

echo '<h1 style="color:pink ; text-align:center">hello from 13_sessions.php</h1>' ;



/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start(); // Must be called before accessing any session data




if (isset($_POST['submit'])) {
  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = filter_input(
    INPUT_POST,
    'password',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  if ($username == 'brad' && $password == 'password') {
    // Set Session variable
    $_SESSION['username'] = $username;
    // Redirect user to another page
    header('Location: /php-after-tutorial/extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>


<h3>complete form to sign in</h3>



  <form style="border:3px solid cornflowerblue ; background-color:yellow ; padding:1em ; margin:1em"
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>


 <h3>name : brad</h3>
 <h3>password : password</h3>