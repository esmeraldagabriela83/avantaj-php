
<?php

//EX 2 CURS 5

$zile=array("Luni" , "Marti" , "Miercuri" , "Joi" , "Vineri" , " Sambata" , "Duminica");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY WEEK</title>
</head>
<body>
<p>DAY WEEK SELECT WITH OPTIONS in select tag</p>



<form action="curs5DayWeek.php" method="post">


<select name="weekDays">

<?php 

foreach($zile as $ziKeyIndex =>$ziVal){
    

       echo '<option>'  . $ziVal . '</option>' ;

}

?>

</select><br>


<input type="submit" name="send" />

</form>


</body>
</html>

<?php

if( isset( $_POST['send'] ) ){
    // print_r($_POST);
    if( $_POST['weekDays'] === "Sambata" ||  $_POST['weekDays'] === "Duminica" ){
          echo '<h1 style="yext-align:center ; color:green" >you chose a free day :' . $_POST['weekDays'] .  '.</h1>' ;
    }else{
        echo '<h1 style="yext-align:center ; color:red" >you chose a workday :' . $_POST['weekDays'] .  '.</h1>' ;
    }

}

?>