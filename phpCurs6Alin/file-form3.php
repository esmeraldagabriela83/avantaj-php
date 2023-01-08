<form enctype="multipart/form-data" method="post">
    <input type="file" name="fisier" /><br/>
    <input type="submit" name="upload" />
</form>

<?php
    if (isset($_POST['upload'])){
        $fisierul = $_FILES['fisier'];

        move_uploaded_file($fisierul['tmp_name'], 'uploads/' . microtime(). '-'. $fisierul['name']);
        
        // name este cheia predefinita pentru array-ul fisierului din $_FILES
    }

?>