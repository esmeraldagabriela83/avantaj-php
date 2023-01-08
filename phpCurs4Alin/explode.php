<?php
    $data = '2022-12-08';
    $data_array = explode('-', $data);
    echo 'anul ' . $data_array[0];  
    echo '<br/>luna ' . $data_array[1];  
    echo '<br/>ziua ' . $data_array[2];  
    echo '<br/>ziua fara zero ' . intval($data_array[2]);  
?>

<hr>

<?php

$text = 'Ana are mere';
        $array_text = explode(' ', $text);


        echo '<p style="font-size:1.5rem ; color:magenta ; text-align:center">array-ul $array_text are 3 elemente :'  . implode(" , " , $array_text) .  '.</p>' ;
?>