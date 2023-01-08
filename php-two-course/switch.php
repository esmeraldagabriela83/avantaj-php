<?php
    $anotimp = 'toamna';

    switch($anotimp){
        case 'primavara': echo $anotimp .' sunt temperaturi intre 6 si 20 grade C';
        break;
        // in cazul in care $anotimp este primavara, echo...
        // break; opreste functia daca se adevereste cazul anterior

        
        case 'vara': echo $anotimp .' sunt temperaturi intre 16 si 50 grade C';
        break;
        
        case 'toamna': echo $anotimp .' sunt temperaturi intre 5 si 15 grade C';
        break;
        
        case 'iarna': echo $anotimp .' sunt temperaturi intre -6 si 5 grade C';
        break;

        default: echo ' anotimpurile trebuie sa fie primavara, vara, toamna sau iarna';

    }

?>