<?php
    $text = '2022-12-08, Joi, Sarbatoare-2014';
    $a1 = explode(',', $text);
    //$a1 va fi
    // array(
    //     '2022-12-08', 
    //     ' Joi', 
    //     'Sarbatoare-2014'
    // );




    $data = explode('-', $a1[0]);
    echo 'anul: '. $data[0] ;
    echo '<br/>luna: '. $data[1] ;
    echo '<br/>ziua: '. $data[2] ;

    echo '<br/>ziua saptamanii: '.  $a1[1];

    $sar = explode('-', $a1[2]);
    echo '<br/> ' . $sar[0] . ' in anul ' . $sar[1]; 
  
?>