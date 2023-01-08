<form action="" method="post">
    <p>
        Element(tag html): <br/>
        <input type="text" placeholder="div" name="element" />
    </p>
    <p>
        latime: <br/>
        <input type="text" placeholder="200px" name="latime" />
    </p>
    <p>
        inaltime: <br/>
        <input type="text" placeholder="300px" name="inaltime" />
    </p>
    <p>
        Culoare de fundal: <br/>
        <input type="text" placeholder="green" name="background" />
    </p>
    <input type="submit" name="creeaza" value="Creeaza fisierul" />
</form>
<p>Avand formularul de mai sus, preluati valorile din toate campurile si cu ajutorul lor creati un fisier .html care sa contina informatiile din formular. Exemplu dorit:</p>
<pre> 
    Am completat: 
        div
        200px
        300px
        green
    Fisierul .html nou creat trebuie sa contina un tag &lt;div&gt; care sa aiba proprietatile:
        width: 200px;
        height: 300px;
        background: green
</pre>

<?php
    if($_POST['creeaza']){
        $content = '<' . $_POST['element'] . 
                    ' style="width:'. $_POST['latime'] .'; 
                           height:'.$_POST['inaltime']. ';
                           background:' .$_POST['background']. ' ;">' .  
                           
                    '</' . $_POST['element']. '>';


        // deschidem fisierul file.html (va fi creat daca nu exista)
        // modul 'w' face ca fisierul sa isi inlocuiasca continutul de fiecare data
        $file = fopen('file.html', 'w');

        //scriem in fisierul deschis mai sus continutul preluat din formular
        fwrite($file, $content);

    }
?>