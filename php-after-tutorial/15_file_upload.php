<?php


echo '<h1 style="color:cyan ; text-align:center">hello and upload im the form any img you want / from 15_file_upload.php</h1>' ;

//https://www.youtube.com/watch?v=BUCiSSyIGGU&t=136s
//PHP For Beginners | 3+ Hour Crash Course

  /* ----------- File upload ---------- */


  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif', 'svg');

 if(isset($_POST['submit'])) {
   // Check if file was uploaded
   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/${file_name}";
    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    // echo $file_ext;



    // Validate file type/extension
    if(in_array($file_ext, $allowed_ext)) {
      // Validate file size
      if($file_size <= 15000000) { // 1000000 bytes = 1MB
        // Upload file
        move_uploaded_file($file_tmp, $target_dir);

        // Success message
        echo '<p style="color: green;">File uploaded!</p>';
      } else {
        echo '<p style="color: red;">File too large!</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type!</p>';
    }
   } else {
     $message = '<p style="color: red;">Please choose a file</p>';
   }
 }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
  </head>
  <body>


    <?php echo $message ?? null; ?>


  <form style="border:3px solid cornflowerblue ; background-color:LightGrey ; padding:1em ; margin:1em"
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
        method="post" 
        enctype="multipart/form-data">


<label>Select image to upload:<br>
  <input type="file" name="upload">
</label><br>

<label>Submit the form:<br>
  <input type="submit" value="Submit" name="submit">
</label>

</form>

<img src="./uploads/copy.jpg" alt="img-uploads" width=20%/><br>


<?php 

echo '<img src="./uploads/' . $file_name .  '" alt="' . $file_name . '" width=30%/>' ;

?>


  </body>
  </html>