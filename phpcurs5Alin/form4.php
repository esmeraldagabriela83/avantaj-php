<?php
$zile = array('Luni', 'Marti', 'Miercuri','Joi','Vineri','Sambata','Duminica');

?>
<form action="" method="post">
    <select name="alegere">
        <?php
            foreach($zile  as  $zi){
                
                if ($_POST['alegere'] == $zi) {
                    // afiseaza optiunea deja selectata
                    echo '<option selected="selected" value="' .$zi. '">' . $zi . '</option>';
                } else {
                    // default
                    echo '<option value="' .$zi. '">' . $zi . '</option>';
                }
                
            }
        ?>
    </select>
    <br/>
    <input type="submit" name="send"/>
</form>

<?php
   if (isset($_POST['send'])){
    if ($_POST['alegere'] == 'Sambata' || $_POST['alegere'] == 'Duminica') {
        echo ' este weekend ';
    } else {
        echo ' este zi lucrataorea';
    }
   }
?>