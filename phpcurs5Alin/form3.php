<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> afisati numarul de caractere din mesaj </p>
    <form action="" method="post">
        <textarea name="msg" rows="5" maxlength="50"><?php
            if (isset($_POST['msg'])){
                echo $_POST['msg'];
            }
        ?></textarea><br/>
        <input type="checkbox" name="words"/> Afiseaza si numarul de cuvinte<br/>
        <input type="submit" name="send"/>
    </form>

    <?php
        if (isset($_POST['send'])){
            echo strlen($_POST['msg']) . ' caractere';

            if (isset($_POST['words'])){
                $cuvinte = explode(' ', $_POST['msg']);
                echo '<br/>' . count($cuvinte) . ' cuvinte';
            }

        }
    ?>
</body>
</html>