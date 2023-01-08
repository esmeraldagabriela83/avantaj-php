<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        user: <input type="text" name="username" value="<?php
            if (isset($_POST['username'])){
                echo $_POST['username'];
            }
        ?>" /><br/>

        <input type="checkbox" name="bifa" <?php
            if (isset($_POST['bifa'])){
                echo 'checked="checked"';
            }
        ?>/>filtru 2<br/>

        <input type="submit" value="Log in" name="login" />
    </form>

    
    <?php
    // verificam daca formularul de login s-a trimis
    if (isset($_POST['login'])){
        echo 'username-ul inserat a fost: ' . $_POST['username'];
        echo '<Br/>filtrul ales a fost:  ' . $_POST['bifa'];
    }?>





<br/>
<br/>
<br/>
<br/>




    <form action="" method="get">

        telefon: <input type="tel" name="telefon" /><br/>
        varsta: <input type="number" name="age" /><br/>

        <input type="submit" value="register" name="register" />

    </form>

    <?php
    

    // verificam daca formularul de register s-a trimis
    if (isset($_GET['register'])){
        echo $_GET['telefon'] .'<br/>' .  $_GET['age'];
    }
    ?>
</body>
</html>