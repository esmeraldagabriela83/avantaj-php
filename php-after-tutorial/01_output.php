<?php  
echo 'hello from 01_output.php';
echo 'Get on the next line , with br tag <br>';
echo 12345 ; 
echo 'get on the next line with br tag <br>';
echo 123.507;

echo "hello world from php<br>";

print 'hello world from print <br>';
print 670;
print '<h3> h3 tag title : hello world from print </h3>';


//print_r() prints single values and arrays
print_r([11 , 22 , 33]);
print "print another array <br>";
print_r([34 , [45 , 67 , "salut"] , "ce mai faci?" , -89.7]);


echo 'Get on the next line , with br tag after me <br>';
//var_dump() returns more info like data type and length
var_dump('Mihaela');
echo 'Get on the next line , with br tag after me <br>';
var_dump('Da,da,dirla,da,da');
echo 'Get on the next line , with br tag after me <br>';
var_dump(true);
echo 'Get on the next line , with br tag <br>';
var_dump(false);
echo 'Get on the next line , with br tag <br>';
var_export('helloo from export variable');
echo 'Get on the next line , with br tag <br>';

echo 'Get on the next line , with br tag after me <br>';
echo ' I am second string  , with br tag after me <br>';
echo ' I am third string , with no br tag after me / ';
echo ' I am fourth string , with no br tag after me ';

echo ' <h1>I am a title string </h1>';

echo "<p>I am a paragraph with some text : Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  </p>";

echo '<img src="https://images.pexels.com/photos/10841960/pexels-photo-10841960.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
           alt="my-php-img" style="width:20% ; border:3px solid green" />';

echo " <article>

<h3 style='text-align:center ; color:olive'>I am a h3 title inside an article</h3>

<p>I am a paragraph with a <strong>strong</strong> tag</p>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

</article>";    

echo '
<article style="padding:1em ; margin:1em ; border:3px solid yellowgreen ; background-color:yellow ;
             display:flex ; align-items:center ; justify-content:center ; flex-direction:column">

             <img src="https://images.pexels.com/photos/13228345/pexels-photo-13228345.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
             alt="my-php-img" style="width:20% ; border:3px solid orange" />

<h3 style="text-align:center ; color:cornflowerblue">I am a h3 title inside an article</h3>
<hr>
<p>I am a paragraph with a <strong>strong</strong> tag</p>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English.</p>

</article>
';

echo '
<ul>
<li style="text-align:center ; color:CadetBlue ; font-size:1.5rem ; list-style-type: none"> I am li 1</li>
<li style="text-align:right ; color:deeppink ; font-size:2rem ; list-style-type: none ; text-decoration:underline"> I am li 2</li>
<li style="text-align:left ; color:Aqua ; font-size:2.5rem ; list-style-type: none"> I am li 3</li>
</ul>
';

/*
echo 1 comment
echo 2 comment
*/

echo '<p style="color:indigo ; font-size:2rem ; text-align:right"><em>I am a paragraph after a php comment</em></p>'

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document made by SHIFT ! ENTER</title>
</head>
<body>
    
<h1 style="text-align:center ; color:DarkMagenta">I am a h1 title inside the html body tag</h1>


<article style="padding:1em ; margin:1em ; border:3px solid yellowgreen ; background-color:Bisque  ;
             display:flex ; align-items:center ; justify-content:center ; flex-direction:column">
<img src="https://images.pexels.com/photos/11172946/pexels-photo-11172946.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
             alt="my-php-img" style="width:20% ; border:3px solid magenta" />

             <ul>
<li style="text-align:center ; color:CadetBlue ; font-size:1.5rem ; list-style-type: none"> I am li 1</li>
<li style="text-align:right ; color:deeppink ; font-size:2rem ; list-style-type: none ; text-decoration:underline"> I am li 2</li>
<li style="text-align:left ; color:Aqua ; font-size:2.5rem ; list-style-type: none"> I am li 3</li>
</ul>

</article>   

<h1>h1 tag title inside html tag</h1>

<?php echo '<h1>h1 title inside h1 tag , which is inside php tag , which is inside body html body tag </h1>' ?>

<h1 style="text-align:center ; color:DarkGoldenRod"><?php echo 'post one';  ?></h1>



</body>
</html>