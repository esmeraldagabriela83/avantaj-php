<?php

//https://www.google.com/search?q=memetype+txt&oq=memetype+txt&aqs=chrome..69i57.21283j0j7&sourceid=chrome&ie=UTF-8

    if (isset($_POST['trimite'])){
       $doc = $_FILES['document']; 
       // $doc va fi un array cu ['name'] , ['type'] , ['tmp_name'] , ['error'] , ['size']
       echo print_r($doc) ;

       //Array ( [name] => sample.txt [full_path] => sample.txt [type] => text/plain [tmp_name] => C:\xampp\tmp\php126B.tmp [error] => 0 [size] => 3392 ) 1

    //    echo print_r($doc['name']) ;

       echo $doc['name'];

    //    echo print_r($doc['full_path']) ;


       echo $doc['full_path'];


    //    echo print_r($doc['type']) ;

       echo $doc['type'];

    //    echo print_r($doc['tmp_name']) ;

       echo $doc['tmp_name'];

    //    echo print_r($doc['error']) ;

       echo $doc['error'];

    //    echo print_r($doc['size']) ;
       
       echo $doc['size'];

    
       if(
          ($doc['type'] == 'text/plain') &&
          $doc['size'] < 5000000 &&
          $doc['error'] == 0
       ) {
        $nume = $doc['name'];   // numele original al fisierului
        $nume_array = explode('.', $nume);  // $nume_array[0] - numele fisierului
                                            // $nume_array[1] - extensia fisierului
        
        $calea_noua = 'uploads/'. $nume_array[0]. microtime() . '.' . $nume_array[1];

        move_uploaded_file($doc['tmp_name'], $calea_noua );
        
        echo '<a  href="'. $calea_noua.' " download>descarca-ti fisierul</a>';

       } else {
        echo 'trebuie sa trimiteti doar tipurile de fisiere acceptate si sa nu depaseasca 5MB';
       }

    }
?>