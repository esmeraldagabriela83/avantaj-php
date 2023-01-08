

<?php
    $elevi = array(
        'Ionescu Vlad' => 5.5,
        'Popescu Vlad' => 8,
        'Marinescu Vlad' => 9.5,
        'Popa Vlad' => 6.5,
        'Marin Vlad' => 8.5,
        'Dorin Vlad' => 10,
    );
?>

<h1>Notele de bursa (descrescator)</h1>
<?php
    arsort($elevi);
    echo '<ul>';
    foreach($elevi as $elev => $nota){
        echo '<li>';
        if ($nota >= 8 && $nota < 9.5) {
            echo $elev . ' media ' . $nota . ' bursa studiu';
        } elseif ($nota >= 9.5) {
            echo $elev . ' media ' . $nota . ' bursa MERIT';
        } else {
            echo $elev . ' media ' . $nota . ' fara bursa';
        }
        echo '</li>';
    }
    echo '</ul>';
?>









