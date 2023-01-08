<?php 


echo '<h1>  curs 4 / 8 12 2022 </h1>' ;

//toate input-urile trebuie sa aiba name , care va fi cheia pt elementul din array-ul ce se va forma

include('arr.php');

echo '<h1 style="text-align:center ; color:indigo">elements of myarr are:'  . implode(" , " , $myarr) .' </h1>';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my form curs 4</title>
</head>
<body>
    


<form action="curs4.php" method="post">


<label for="name">Name:<br>

<input type="text" name="name" id="name" placeholder="write your name" required/>

</label></br>



<label for="surname">Surname:<br>
required
<input type="text" name="surname" id="surname" placeholder="write your surname"  required/>

</label></br>



<label for="age">Age:<br>

<input type="number" name="age" id="age" placeholder="write your age"  required/>

</label></br>


<label for="email">Email:<br>

<input type="email" name="email" id="email" placeholder="write your email"  required/>

</label></br>


<label for="phone">Phone number:<br>

<input type="tel" name="phone" id="phone" placeholder="write your phone nr"  required/>

</label></br>


<label for="list">Choose a car:<br>

<select name="list" id="list">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</label><br>

<p>choose from radio inputs:</p>

<label for="html">HTML
<input type="radio" id="html" name="fav_language" value="HTML">
</label><br>

<label for="css">CSS
<input type="radio" id="css" name="fav_language" value="CSS">
</label><br>

<label for="javascript">JavaScript
<input type="radio" id="javascript" name="fav_language" value="JavaScript">
</label><br>


<label for="w3review">Comment:<br>

<textarea id="w3review" name="w3review" rows="4" cols="50" required>
At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
</textarea>
</label><br>

<label for="num1">num1<br>
<input type="number" id="num1" name="num1" placeholder="num1" required >
</label><br>

<label for="num1">num2<br>
<input type="number" id="num2" name="num2" placeholder="num2" required>
</label><br>

<input type="submit" />


</form>


</body>
</html>


<?php 

echo $_POST['name'] . '<br>' ;
echo $_POST['surname'] . '<br>' ;
echo $_POST['age'] . '<br>' ;
echo $_POST['email'] . '<br>' ;
echo $_POST['phone'] . '<br>' ;

echo $_POST['list'] . '<br>' ;
echo $_POST['fav_language'] . '<br>' ;

echo $_POST['w3review'] . '<br>' ;

echo $_POST['num1'] . '<br>' ;
echo $_POST['num2'] . '<br>' ;

echo '<h1>name is :' . $_POST['name'] . '</h1>' ;
echo '<h1>surname is :' . $_POST['surname'] . '</h1>' ;
echo '<h1>age is :' . $_POST['age'] . '</h1>' ;
echo '<h1>email is :' . $_POST['email'] . '</h1>' ;
echo '<h1>telephone number is :' . $_POST['phone'] . '</h1>' ;

echo '<h1>your option car  is :' . $_POST['list'] . '</h1>' ;
echo '<h1>your radio input value is :' . $_POST['fav_language'] . '</h1>' ;

echo '<h1>comment is :' . $_POST['w3review'] . '</h1>' ;

echo '<h1 style="text-align:center ; color:gold">num1 is :' . $_POST['num1'] . '</h1>' ;
echo '<h1 style="text-align:center ; color:gold">num2 is :' . $_POST['num2'] . '</h1>' ;

?>





<?php

require('function.php');

//apel functii

echo showText();

echo  writeNameFunc($_POST['name'] , $_POST['surname'])  ;

echo  registerEmail($_POST['email']) ;

echo addInputNumbers($_POST['num1'] , $_POST['num2']) ;

//warning-urile apar initial in pagina pt ca nu am folosit isset

?>