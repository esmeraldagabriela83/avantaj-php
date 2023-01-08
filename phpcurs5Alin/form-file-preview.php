<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="post" enctype="multipart/form-data">
        Adauga cv-ul <input type="file" name="cv" /><br/>
        <input type="submit" name="send" />
    </form> 

    <?php
        if(isset($_POST['send'])){
            // echo  '<img src="' . $_FILES['cv']['name'] . '">';
            echo '<pre>';
            print_r ($_FILES['cv']);
            echo '</pre>';
        }
    ?>
</body>
</html>