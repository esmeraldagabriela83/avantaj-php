<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label>Introduce parola<br/>
        <input type="password" name="parola" /></label><br/>

        <select name="limba">
            <option value="ro">Romana</option>
            <option value="en">Engleza</option>
            <option value="fr">Franceza</option>
        </select>

        <input type="submit" name="send" />
    </form>

    <?php
        if(isset($_GET['send'])){
            echo $_GET['parola'] . '<br/> ' . $_GET['limba'];

        }
    ?>
</body>
</html>