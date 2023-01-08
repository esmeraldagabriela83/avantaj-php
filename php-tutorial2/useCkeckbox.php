<?php
//free code camp
//https://www.youtube.com/watch?v=OK_JCtrrv-c&t=304s
//PHP Programming Language Tutorial - Full Course

echo '<h1 style="text-align:center ; color:gray">use checkboxes</h1>' ;

?>


<form action="useCkeckbox.php" method="post" style=" border:3px solid red ; padding:1em ; margin:1em">


Apples : <input type="checkbox" name="fruits[]" value="apples"/><br>

Oranges : <input type="checkbox" name="fruits[]" value="oranges"/><br>

Pears : <input type="checkbox" name="fruits[]" value="pears"/><br>

Nuts : <input type="checkbox" name="fruits[]" value="nuts"/><br>

Bananas : <input type="checkbox" name="fruits[]" value="bananas"/><br>

<input type="submit" name="send"/>

</form>



<?php




if( isset($_POST["send"]) ){

//acest array se completaza cu fructele alese de user

$fruits=$_POST["fruits"];

echo $fruits[0] . '<br>' ;
echo $fruits[1] . '<br>' ;
echo $fruits[2] . '<br>'  ;
echo $fruits[3] . '<br>'  ;
echo $fruits[4] . '<br>'  ;

echo '<h1 style="text-align:center ; color:crimson">' . $fruits[0] . '</h1>' ; 
echo '<h1 style="text-align:center ; color:crimson">' . $fruits[1] . '</h1>' ;
echo '<h1 style="text-align:center ; color:crimson">' . $fruits[2] . '</h1>' ; 
echo '<h1 style="text-align:center ; color:crimson">' . $fruits[3] . '</h1>' ;
echo '<h1 style="text-align:center ; color:crimson">' . $fruits[4] . '</h1>' ;

echo '<h1 style="text-align:center ; color:olive">'  . implode(" , " , $fruits ) . '</h1>' ;


}

?>