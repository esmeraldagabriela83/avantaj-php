<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fisiere[]" multiple />
    <input type="submit" name="send" />
</form>

<?php
    if(isset($_POST['send'])){
        // decomentati urmatoarele 3 linii daca vreti sa vedeti ce fisiere/informatii ati trimis
        // echo '<pre>';
        // print_r ($_FILES['fisiere']);
        // echo '</pre>';
        
        $doc = $_FILES['fisiere']; 
        // returneaza array-ul principal cu cele 5 chei: name, size, type, error si tmp_name INDIFERENT de numarul de fisiere trimise

        // toate aceste array-uri vor avea cate o valoare pentru fiecare fisier
        // astfel indiferent de cea pe care o parcurgen, vom avea acces la numarul de fisiere trimise
        //  count($doc['name']) = count($doc['size']) = count($doc['error']) = count( $doc['type']) =  count($doc['tmp_name']) = numarul de fisiere trimise


        for($x = 0; $x < count($doc['name']); $x ++) {
            $cale = 'uploads2/' . microtime() . $doc['name'][$x];
            move_uploaded_file($doc['tmp_name'][$x], $cale );
            echo '<a href="'.$cale.'" download> descarca fisierul'.  $doc['name'][$x]. ' </a><br/>';
        }
        
    }
?>
