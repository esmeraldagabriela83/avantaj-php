<form enctype="multipart/form-data" method="post">
    <input type="file" name="fisier" /><br/>
    <input type="submit" name="upload" />
</form>

<?php
    if (isset($_POST['upload'])){
        print_r($_FILES);
    }

?>