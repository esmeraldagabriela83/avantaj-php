<form action="" method="post">
    <p>
        Element(tag html): <br/>
        <input type="text" placeholder="div" name="element" value="<?php
        if(isset($_POST['element'])){echo $_POST['element'];}
        ?>" />
    </p>
    <p>
        latime: <br/>
        <input type="text" placeholder="200px" name="latime" value="<?php
        if(isset($_POST['latime'])){echo $_POST['latime'];}
        ?>" />
    </p>
    <p>
        inaltime: <br/>
        <input type="text" placeholder="300px" name="inaltime" value="<?php
        if(isset($_POST['inaltime'])){echo $_POST['inaltime'];}
        ?>" />
    </p>
    <p>
        Culoare de fundal: <br/>
        <input type="text" placeholder="green" name="background" value="<?php
        if(isset($_POST['background'])){echo $_POST['background'];}
        ?>" />
    </p>

    <p>
        User text: <br/>
        <input type="text" placeholder="your text" name="userText" value="<?php
        if(isset($_POST['userText'])){echo $_POST['userText'];}
        ?>" />
    </p>

    <p>
        User nr: <br/>
        <input type="nr" placeholder="your nr" name="userNr" value="<?php
        if(isset($_POST['userNr'])){echo $_POST['userNr'];}
        ?>" />
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

if(isset($_POST['creeaza'])){

     echo '<p style="text-align:center ; color:green">Tag-ul ales este :' . $_POST['element'] .  '.</p>' ;
     echo '<p style="text-align:center ; color:blue">Latimea alesa este :' . $_POST['latime'] .  '.</p>' ;
     echo '<p style="text-align:center ; color:LightSlateGray">Inaltimea alesa este :' . $_POST['inaltime'] .  '.</p>' ;
     echo '<p style="text-align:center ; color:Chocolate">Culoarea alesa este :' . $_POST['background'] .  '.</p>' ;
     echo '<p style="text-align:center ; color:olive">Textul ales este :' . $_POST['userText'] .  '.</p>' ;

     echo '<hr>' ;

   echo '<div style="margin:1em 0 ; 
                     height:' . $_POST['inaltime'] . '; 
                     width: '. $_POST['latime'] . '; 
                     background-color:' . $_POST['background'] . '">1. your text inside a div tag is : ' . $_POST['userText'] . '</div>' ;



   echo '<' . $_POST['element'] . '>new tag </' . $_POST['element'] . '>' ;


     echo '<div style=" margin:1em 0;
                        width:' . floatval($_POST['latime']) . '; 
                        height:' . floatval($_POST['inaltime']) . ';
                        background-color:' . $_POST['background'] . '">2. your text inside a div tag is : ' . $_POST['userText'] . '</div > ';

                       


    echo '<' . $_POST['element'] . ' style="color:cornflowerblue ; font-size:1.5rem">new tag with cornflowerblue color</' . $_POST['element'] . '>' ;

    echo '<hr>' ;

    $newTag = '<' . $_POST['element'] . ' style="font-size:1.5rem ; text-align:center ; color:' . $_POST['background'] . '" >user text is : ' . $_POST['userText'] . ' </' . $_POST['element'] . '>' ;

    $newTag .= '<div style="display:flex ; align-items:center ; justify-content:center">
                     <img src="https://images.pexels.com/photos/5755160/pexels-photo-5755160.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                     alt="myImg" 
                     style="width:' . $_POST['userNr'] . '"/>
                                                           </div>' ;

    $newTag .= '<h3 style="text-align:center ; color:' . $_POST['background'] . '">default exercise text</h3>' ;                                                     

    echo $newTag ;

    echo '<hr>' ;

                                    $cale ='uploads/tag' . microtime() . '.html' ;
                                    $ch = fopen($cale,'w');
                            
                                    $newPage = '<h1 style="text-align:center ; color:' . $_POST['background'] . '"> Textul user-ului este:'   .  $_POST['userText'] . '</h1>' ;

                                    $newPage .= '<' . $_POST['element'] . 
                                                          ' style=" margin:1em 0 ;
                                                                    width:' . floatval($_POST['latime']) . '; 
                                                                    height:' . floatval($_POST['inaltime']) . ';
                                                                    background-color:' . $_POST['background'] . '">your text is :' . $_POST['userText'] . '</' . $_POST['element']. ' > ';
                                   

                                    $newPage .= '<img src="https://images.pexels.com/photos/14749839/pexels-photo-14749839.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                                     alt="whateverImg" 
                                                     style="width:' . $_POST['userNr'] . '"/>' ;


                                    $newPage .= '<' . $_POST['element'] . 
                                                          ' style=" margin:1em 0 ;
                                                                    width:' . floatval($_POST['userNr'] + 400) . '; 
                                                                    height:' . floatval($_POST['userNr'] + 200) . ';
                                                                    background-color:' . $_POST['background'] . '">same text is :' . $_POST['userText'] . '</' . $_POST['element']. ' > ' ;


                                    fwrite($ch,$newPage); 
                                    
                                    echo '<br>' ;
                                    
                                    echo 'Alta pagina a fost creata. <br> Vezi <a href="' . $cale .'" target="_blank">User-ul a scris textul : ' . $_POST['userText'] . '</a>';                                

}

?>