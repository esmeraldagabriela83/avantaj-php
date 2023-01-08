<p>Avand fisierul sample.txt, preluati tot continutul fisierului si afisati doar continutul dintre ***</p>

<?php
    $file = fopen('sample.txt', 'r');
    $content = fread($file, filesize('sample.txt'));
    $ce_trebuie = explode('***', $content);
    echo $ce_trebuie[1];


////my try
echo '<p style="color:olive">' . $ce_trebuie[0] . '</p>';
echo '<p style="color:orange">' . $ce_trebuie[1] . '</p>';
echo '<p style="color:magenta">' . $ce_trebuie[2] . '</p>';

?>

<?php

$file2 = fopen('myTry.html', 'r');
$content2 = fread($file2, filesize('myTry.html'));
$ce_trebuie2 = explode('***', $content2);
echo $ce_trebuie2[0];
echo $ce_trebuie2[1];
echo $ce_trebuie2[2];
echo $ce_trebuie2[3];
echo $ce_trebuie2[4];



?>