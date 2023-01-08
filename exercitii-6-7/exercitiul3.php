<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3 ex6-7</title>
    <style>

        .thumbnail {
            margin: 20px;
            border: 3px solid purple;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        #fisiereInput{
            background-color:pink ;
            font-size:1.5rem ;
            margin:1em 0
        }
        #submitInput{
            background-color:DarkCyan ; 
            color:white ; 
            font-size:1.5rem ; 
            margin:1em 0;
            padding:0.5em 0.3em;
            cursor:pointer;
            /* border:none; */
        }
        
    </style>
</head>
<body>
    
<h2 style="text-align:center ; color:Plum">Upload one of these: jpeg , jpg , gif , svg+xml</h2>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="fisiere[]" id="fisiereInput" multiple /><br/>

    <input type="submit" name="trimite" id="submitInput"/>

</form>

<p>Avand formularul de mai sus, trimiteti 3 imagini, salvati-le in folder-ul uploads si afisati-le pe fiecare intr-un div cu clasa="thumbnail"  </p>

</body>
</html>


<?php


echo '<div class="thumbnail"></div>' ;

echo  '<div style=" height: 150px;
                    width: 150px;
                    margin: 20px;
                    border-radius:50%;
                    border:3px solid yellowgreen;
                    background-repeat: no-repeat;
                    background-image: url(https://images.pexels.com/photos/383646/pexels-photo-383646.jpeg?auto=compress&cs=tinysrgb&w=1600);
                    background-position: center;
                    background-size: cover"></div>' ;

echo  '<div style=" height: 150px;
                    width: 150px;
                    margin: 20px;
                    border-radius:50%;
                    border:3px solid RoyalBlue;
                    background-repeat: no-repeat;
                    background-image: url(./uploads/yellowCV.jpg);
                    background-position: center;
                    background-size: cover"></div>' ; 



    if(isset($_POST['trimite'])){

        echo '<h1 style="text-align:center ; color:forestgreen">fisiere descarcate</h1>' ;

      //  decomentati urmatoarele 3 linii daca vreti sa vedeti ce fisiere/informatii ati trimis
        echo '<pre>';
        print_r ($_FILES['fisiere']);
        echo '</pre>';
        
        $doc = $_FILES['fisiere']; 

       

        // returneaza array-ul principal cu cele 5 chei: name, size, type, error si tmp_name INDIFERENT de numarul de fisiere trimise

        // toate aceste array-uri vor avea cate o valoare pentru fiecare fisier
        // astfel indiferent de cea pe care o parcurgen, vom avea acces la numarul de fisiere trimise
        //  count($doc['name']) = count($doc['size']) = count($doc['error']) = count( $doc['type']) =  count($doc['tmp_name']) = numarul de fisiere trimise


     

                
        for($x = 0; $x < count($doc['name']); $x ++) {


            echo '<h3 style="text-align:center ; color:gold">$doc/name/ <strong style="color:red">' . $x . '</strong> : '  . $doc['name'][$x] . '</h3>' ;

            echo '<h3 style="text-align:center ; color:Darkorange">$doc/full_path/x : ' . $doc['full_path'][$x] . '</h3>' ;
    
            echo '<h3 style="text-align:center ; color:blue">$doc/type/x : ' . $doc['type'][$x] . '</h3>' ;
    
            echo '<h3 style="text-align:center ; color:cornflowerblue">$doc/tmp_name/x : ' . $doc['tmp_name'][$x] . '</h3>' ;
    
            echo '<h3 style="text-align:center ; color:MediumAquaMarine">$doc/error/x : ' . $doc['error'][$x] . '</h3>' ;
    
            echo '<h3 style="text-align:center ; color:PaleVioletRed">$doc/size/x : ' . $doc['size'][$x] . '</h3>' ;



 
            if ($doc['type'][$x] == 'image/jpeg' || 
                $doc['type'][$x] == 'image/jpg' ||
                $doc['type'][$x] == 'image/png'||
                $doc['type'][$x] == 'image/gif' ||
                $doc['type'][$x] == 'image/svg+xml'){


                $cale = 'uploads/' . microtime() . $doc['name'][$x];
                move_uploaded_file($doc['tmp_name'][$x], $cale );
    
                echo '<a href="'.$cale.'" download> descarca fisierul : '.  $doc['name'][$x]. ' </a><br/>';
    
                echo '<img src="' . $cale . '" alt="myUploadedImg" class="thumbnail"/>' ;
    
                                 
    
                echo  '<div style=" height: 150px;
                                    width: 150px;
                                    margin: 20px;
                                    border-radius:50%;
                                    border:3px solid tomato;
                                    background-repeat: no-repeat;
                                    background-image: url(\'./' . $cale . '\');
                                    background-position: center;
                                    background-size: cover"></div>' ;
    


            }else{
                echo "problem: not the right kind of file";
            }



            
        }

    }
        
    
?>