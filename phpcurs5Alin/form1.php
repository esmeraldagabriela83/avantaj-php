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
        <input type="radio" name="age" value="minor"  <?php
            if (isset($_POST['age']) && $_POST['age'] == 'minor'){
                echo 'checked="checked"';
            }
        ?> /> 0-17 <br/>
        <input type="radio" name="age" value="adult" 
        <?php
            if (isset($_POST['age']) && $_POST['age'] == 'adult'){
                echo 'checked="checked"';
            }
        ?>
        /> 18-60 <br/>
        <input type="radio" name="age" value="varstnic"  <?php
            if (isset($_POST['age']) && $_POST['age'] == 'varstnic'){
                echo 'checked="checked"';
            }
        ?>/> 61+ <br/>
        <button name="varsta">send</button>
    </form>

    <?php
        if (isset($_POST['varsta'])){
            echo  $_POST['age'];
        }
    ?>
</body>
</html>