<?php 

echo 'hello from 03_arrays.php';

echo 'Get on the next line , with br tag <br>';

/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

print_r($numbers);
echo 'Get on the next line , with br tag <br>';

var_dump($numbers);
echo 'Get on the next line , with br tag <br>';


$fruits=array('apples' , 'oranges' , 'pears' , 'nuts' , 'bananas');
var_dump($fruits);
echo 'Get on the next line , with br tag <br>';

print_r($fruits);
echo 'Get on the next line , with br tag <br>';

echo $fruits[1];
echo 'Get on the next line , with br tag <br>';

$hex=[
    'red' => '#f00',
    'blueE' => '#0f0',
    'green' => '#00f'
];

echo $hex['blueE'];
echo 'Get on the next line , with br tag <br>';

/* ---- Multi-dimensional arrays ---- */
/*
  Multi-dimansional arrays are often used to store data in a table format.
*/
// Single person

$person=[
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

echo $person['first_name'];
echo 'Get on the next line , with br tag <br>';

echo $person['last_name'];
echo 'Get on the next line , with br tag <br>';

echo $person['email'];

echo '<h1>Person nane is : ' . $person['first_name'] . " " . $person['last_name'] . " and email address is : " . $person['email'] . " . " . '</h1>' ;

// Array of people

echo 'Get people , with br tag <br>';

$people = [
    $person, 
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Aco',
      'email' => 'jane@gmail.com',
    ],
  ];
  
  var_dump($people);

  echo 'Get the email of second person of people array , with br tag <br>';
echo $people[1]['email'];

echo  '<h1 style="color:blue">' . $people[1]['email'] . '</h1>'  ;

echo 'Get the first_name of third person of people array , with br tag <br>';
echo $people[2]['first_name'];

echo '<h1 style="color:green ; text-align:center">' . $people[2]['first_name'] .  ' </h1>'   ;

echo 'Get  people array , with br tag <br>';
var_dump(json_encode($people));

//-------------after course 2

$colorArr=array("SaddleBrown" , "SteelBlue" , "plum") ;

echo '<ul>';

for($index=0 ; $index <count($people) ; $index ++ ){

echo '<li style="font-size:1.5rem ; color:' . $colorArr[$index] . '">each person is :'   . $people[$index]['first_name'] . " " . $people[$index]['last_name']  . " has email address: " . $people[$index]['email'] . " . " . ' </li>' ;

}

echo '</ul>';

?>