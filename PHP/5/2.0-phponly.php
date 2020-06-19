<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - PHP only</title>
    <style>        
        form {
            width: fit-content;
            margin: auto;
        }
        
        h3 {
            margin: auto;
            text-align: center;
        }
        
        input[type="submit"] {
            display: block;
            margin: auto;
        }

        #container {
            background: #DDDDDD;
            padding: 10px;
            border: 1px solid grey;
            font-family: Verdana;
            width: 40%;
            margin: 20% auto auto;
            box-shadow: 3px 3px 10px 2px #CCCCCC;
            border-radius: 5px;
            text-align: center;
        }
        img {
            height: 20px;
            width: auto;
        }
    </style>
</head>
<body style="background:<?php echo empty($_GET) ? "#FFFFFF" : "#EEEEEE"; ?>">
    <?php   
        if (empty($_GET)) {
    ?>
            <form action="2.0-phponly.php" method="GET">
                <h3>Nom : </h3>
                <input type="text" name="nom" placeholder="Nom :"><br>
                <input type="text" name="prenom" placeholder="Prénom :">
                <hr>
                <h3>Sexe : </h3>
                <input type="radio" name="sexe" id="H" value="H">
                <label for="H">Homme</label><br>
                <input type="radio" name="sexe" id="F" value="F">
                <label for="F">Femme</label>
                <hr>
                <h3>Vins : </h3>
                <input type="checkbox" name="vins[]" id="vin1" value="bordeaux">
                <label for="bordeaux">Bordeaux</label><br>
                <input type="checkbox" name="vins[]" id="vin2" value="beaujolais">
                <label for="beaujolais">Beaujolais</label><br>
                <input type="checkbox" name="vins[]" id="vin3" value="loire">
                <label for="loire">Loire</label>
                <hr>
                <input type="submit" name="valider" value="Valider">
            </form>
    <?php
        } else {
            $sexe = $_GET['sexe'];
            if ($sexe === "H") {
                $civ = "Monsieur";
                $article = "un";
                $suffixe = "";
            } else {
                $civ = "Madame";
                $article = "une";
                $suffixe = "e";
            }
            $identite = array($_GET['nom'],$_GET['prenom']);
            $vins = $_GET['vins'];
            for ($i = 0; $i < count($vins); $i++)
            {
                $vins[$i] = ucwords($vins[$i]);
            }

            echo "<div id='container'>";
            echo "<p>Bonjour ".$civ." <strong>".implode($identite, " ")."</strong>, j'espère que vous allez bien!</p><br>";
            echo "<p>Vous êtes ".$article." fin".$suffixe." connaisseur! Je vois que vous aimé le ".implode($vins, " ainsi que le ").(count($vins) > 1 ? ". Ce sont de très bons vins!" : ". C'est un très bon vin!");
            echo "<img src='./5Head.png'><img src='wine_glass.png'>";
            echo "</div>";
        }
    ?>
</body>
</html>