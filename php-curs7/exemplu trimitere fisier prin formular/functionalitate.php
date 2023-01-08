<?php
    if (isset($_POST['trimite'])){
       $doc = $_FILES['document']; 
       // $doc va fi un array cu ['name'], ['tmp_name'], ['size'], ['error'], ['type']
    
       if(
          ($doc['type'] == 'application/pdf' || 
          $doc['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' ||
          $doc['type'] == 'application/msword' || 
          $doc['type'] == 'application/vnd.ms-excel' ||
          $doc['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ) &&
          $doc['size'] < 5000000 &&
          $doc['error'] == 0
       ) {
        $nume = $doc['name'];   // numele original al fisierului
        $nume_array = explode('.', $nume);  // $nume_array[0] - numele fisierului
                                            // $nume_array[1] - extensia fisierului
        
        $calea_noua = 'uploads/'. $nume_array[0]. microtime() . '.' . $nume_array[1];

        move_uploaded_file($doc['tmp_name'], $calea_noua );
        
        echo '<a href="'. $calea_noua.'" download>descarca-ti fisierul</a>';

       } else {
        echo 'trebuie sa trimiteti doar tipurile de fisiere acceptate si sa nu depaseasca 5MB';
       }

    }
?>