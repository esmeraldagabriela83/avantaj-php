<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:BurlyWood">swich statement in form</h1>' ;

?>

<form action="swichStatementForm.php" method="get">

What was your grade?<br>

<input type="text" name="grade" /><br>

<input type="submit" name="submitGrade"/>

</form>

<?php


if(isset($_GET['submitGrade'])){

     echo '<h1>' . $_GET['grade'] . '</h1>' ;


     switch($_GET['grade']){
          case "A" :
          echo " You did great ! " ;
          break ;

          case "B" :
               echo "You did pretty good ." ;
               break ;

               case "C" :
                    echo "You did poorly ." ;
                    break ; 

                    case "D" :
                         echo "You did very bad ." ;
                         break ;

                         case "F" :
                              echo "You fail ." ;
                              break ;  
                              default: 
                              echo "Invalid grade" ;     

     }

}


?>