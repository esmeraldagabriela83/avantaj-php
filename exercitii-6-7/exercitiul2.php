



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2 ex 6-7</title>
    <style>
        form {
            display: flex;
            align-items: center;
        }
        #fi {
            /* display: none; */
        }
        label {
            border: 2px solid black;
            border-radius: 10px;
            padding: 6px 8px;
            color:MediumSlateBlue ; 
            font-size:1.5rem;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }
        label img {
            height: 26px;
            margin-right: 10px;
        }
        #send {
            background: LightSlateGray ;
            color: LemonChiffon;
            border: 2px solid black;
            border-radius: 10px;
            height: 34px;
            width: 110px;
            margin-left: 10px;
            font-size:1.5rem;
        }
        #send:hover {
            background: LemonChiffon;
            color: LightSlateGray;
        }

    </style>
</head>
<body><p>Avand fisierul sample.txt, preluati tot continutul fisierului si afisati doar continutul dintre ***</p>



    <h2>Incarcati fisiere: .txt</h2>

    <form action="functionalitate.php" method="post" enctype="multipart/form-data">
        <input type="file" name="document" id="fi" />
        <label for="fi">
            <img src="images/upload (1).png" />
            Adauga fisierul
        </label>
        <input type="submit" value="Upload" name="trimite" id="send" />
    </form>

</body>
</html>

