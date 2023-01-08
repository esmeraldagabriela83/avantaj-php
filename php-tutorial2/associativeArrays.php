<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:yellowgreen">associative arrays</h1>' ;

//array has key , value, pairs

$grades=array(
    "Jim" => "A+" ,
    "Pam" => "B-" ,
    "Oscar" => "C+" ,
) ;

echo '<h1 style="color:yellowgreen ; text-align:center">Jim el of array is :' . $grades["Jim"] . '</h1>' ;

echo '<h1 style="color:yellowgreen ; text-align:center">Pam el of array is :' . $grades["Pam"] . '</h1>' ;

echo '<h1 style="color:yellowgreen ; text-align:center">Oscar el of array is :' . $grades["Oscar"] . '</h1>' ;

$grades["Jim"]="F";

echo '<h1 style="color:red ; text-align:center">Jim el of array is :' . $grades["Jim"] . '</h1>' ;

$grades["Andreea"]="E+";

echo '<h1 style="color:orange ; text-align:center"> list has ' . count($grades) . ' students</h1>' ; 

echo '<ul>' ;
foreach($grades as $gradeKey => $gradeVal){
  
 echo '<li style="color:dimgray ; text-align:center"> student ' . $gradeKey . ' has ' . $gradeVal . ' grade . </li>' ;   

}
echo '</ul>' ;


?>


<form action="associativeArrays.php" method="post">


<label for="studentID">Insert a student name: </label><br>
<input type="text" name="student" id="studentID" value="<?php

//ca sa ramana scris in input  de catre user
echo $_POST['student'] ;

?>" /><br>

<input type="submit" name="submit"/>


</form>

<?php

if( isset($_POST['submit']) ){

      echo '<h2 style="color:BurlyWood ; text-align:center">value from the input is :' . $_POST['student'] . '</h2>' ;

      echo '<h2 style="color:CadetBlue ; text-align:center"> student from input has grade :' . $grades[$_POST['student']] . '</h2>' ;

      echo '<h3 style="color:DarkGoldenRod ; text-align:center">  student ' . $_POST['student'] . ' has ' . $grades[$_POST['student']] . ' grade . </h3>' ; 

}

?>