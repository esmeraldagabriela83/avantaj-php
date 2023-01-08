<form enctype="multipart/form-data" method="post">
    <input type="file" name="fisier" /><br/>
    <input type="submit" name="upload" />
</form>

<?php
    if (isset($_POST['upload'])){
        $fisierul = $_FILES['fisier'];

        // incarcam fisierul din formular (temporar in browser)
        // in locatia aleasa de catre noi (uploads/nume...) folder-ul uploads fiind creat manual
        move_uploaded_file($fisierul['tmp_name'], 'uploads/' . $fisierul['name']);
        // echo 'calea fisierului:  uploads/' . $fisierul['name'];
        echo $fisierul['type'] . '<br/>';
        if ($fisierul['type'] == 'image/jpeg' || 
            $fisierul['type'] == 'image/png'||
            $fisierul['type'] == 'image/gif' ||
            $fisierul['type'] == 'image/svg+xml'   ){
                echo '<img src="uploads/' . $fisierul['name'] . '"/>';
        }  elseif ($fisierul['type'] == 'application/pdf'){
            echo '<a href="uploads/' . $fisierul['name'] . '" target="_blank">vezi pdf</a>'; 
        } elseif ($fisierul['type'] == 'video/mp4'){
            echo '<video controls> <source type="video/mp4"
            src="uploads/' . $fisierul['name'] . '"/></video>'; 
        } else {
            echo '<a href="uploads/' . $fisierul['name'] . '" download>descarca fisierul</a>'; 
        }
    }

?>