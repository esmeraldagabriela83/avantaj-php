<?php
    // cream un fisier hello.txt 
    // file_put_contents('files/hello.txt','creat cu file put contents in 2023');
    file_put_contents('files/hello.txt','altceva');

    // pentru adaugare va trebui sa luam intai continutul original
    $original = file_get_contents('files/hello.txt');
    file_put_contents('files/hello.txt', $original . ' ceva nou');
?>