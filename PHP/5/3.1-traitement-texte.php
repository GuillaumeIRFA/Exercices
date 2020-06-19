<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerccice 3.1 - Traitement texte</title>
    <style>
        body {
            background: #EEEEEE;
        }
        #container {
            background: #DDDDDD;
            padding: 5px;
            border: 1px solid grey;
            font-family: Verdana;
            width: 45%;
            margin: 20% auto auto;
            box-shadow: 3px 3px 10px 2px #CCCCCC;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php
            $texte = $_GET['texte'];
            echo "Résultat après traitement PHP<hr>";
            echo nl2br($texte);
        ?>
    </div>
</body>
</html>