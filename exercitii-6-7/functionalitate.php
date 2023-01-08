<?php

//https://www.google.com/search?q=memetype+txt&oq=memetype+txt&aqs=chrome..69i57.21283j0j7&sourceid=chrome&ie=UTF-8

    if (isset($_POST['trimite'])){
       $doc = $_FILES['document']; 
       // $doc va fi un array cu ['name'], ['tmp_name'], ['size'], ['error'], ['type']
       echo print_r($doc) ;
    
       if(
          ($doc['type'] == 'text/plain') &&
          $doc['size'] < 5000000 &&
          $doc['error'] == 0
       ) {
        $nume = $doc['name'];   // numele original al fisierului
        $nume_array = explode('.', $nume);  // $nume_array[0] - inainte de textul dorit
                                            // $nume_array[1] - textul dorit
                                            // $nume_array[2] - dupa textul dorit
        
        $calea_noua = 'uploads/'. $nume_array[0]. microtime() . '.' . $nume_array[1];

        move_uploaded_file($doc['tmp_name'], $calea_noua );
        //deschidem fisierul salvat
        $f = fopen( $calea_noua ,'r');

        // preluam intregul continut al fisierului
        $c = fread($f, filesize($calea_noua));

        $rez = explode('***', $c);

        echo '<p style="text-align-center ; color:green">' . $rez[0] . '</p>' ;

        echo '<br>' ;
        echo $rez[1];
        echo '<br>' ;

        echo '<p style="text-align-center ; color:red">' . $rez[2] . '</p>' ;
        
        echo '<a href="'. $calea_noua.'" download>descarca-ti fisierul</a>';

       } else {
        echo 'trebuie sa trimiteti doar tipurile de fisiere acceptate si sa nu depaseasca 5MB';
       }

    }
?>