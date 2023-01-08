<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:tomato">comparison in PHP /if statements con`t</h1>' ;

echo max(3 , 6);



function getMax($num1 , $num2){

    if($num1 > $num2){
        return $num1 ;
    }else{
        return $num2 ;
    }

}

echo getMax(56 , 890);

echo '<h1>' . getMax(64 , 8100) . '</h1>' ;

?>




<?php

function getMax3($num1 , $num2 , $num3){

     if($num1 >= $num2 && $num1 >= $num3){
         return '<h1 style="color:cornflowerblue ; text-align:center">' . $num1 . ' is the biggest </h1>' ;
     }elseif($num2 >= $num1 && $num2 >= $num3){
        return '<h1 style="color:magenta ; text-align:center">' . $num2 . ' is the biggest </h1>' ;
     }else{
        return '<h1 style="color:gold ; text-align:center">' . $num3 . ' is the biggest </h1>' ;
     }

}


//apel functie

echo getMax3(450 , 70 , 2);
echo getMax3(67 , 70000 , 240);
echo getMax3(8 , 75 , 3000);

?>


<form action="ifStatementsCont.php" method="post">

<label for="firstNr">first nr</label><br>
<input type="number" name="nr1" id="firstNr" /><br>

<label for="secondNr">second nr</label><br>
<input type="number" name="nr2" id="secondNr" /><br>

<label for="thirdNr">third nr</label><br>
<input type="number" name="nr3" id="thirdNr" /><br>

<input  type="submit" name="send" value="show max nr"/>

</form>



<?php

if(isset($_POST['send'])){
   echo '<h1 style="color:coral ; text-align:center">first nr is :' . $_POST['nr1'] . '</h1>' ;
   echo '<h1 style="color:magenta ; text-align:center">second nr is :' . $_POST['nr2'] . '</h1>' ;
   echo '<h1 style="color:yellowgreen ; text-align:center">third nr is :' . $_POST['nr3'] . '</h1>' ;

   echo getMax3($_POST['nr1'] , $_POST['nr2'] , $_POST['nr3']);
}

?>