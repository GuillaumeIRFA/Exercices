<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1.1 - Traitement PHP</title>
    <style>
        body {
            background: #EEEEEE;
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
<body>
    <?php 
        // Récupérations des données GET
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
    ?>
    <div id="container">
        <p>Bonjour <?php echo $civ." <strong>".implode($identite, " ")."</strong>"; ?>, j'espère que vous allez bien!</p><br>
        <p>Vous êtes <?php echo $article." fin".$suffixe; ?> connaisseur! Je vois que vous aimé le <?php echo implode($vins, " ainsi que le ").(count($vins) > 1 ? ". Ce sont de très bons vins!" : ". C'est un très bon vin!"); ?>
        <img src="./5Head.png"><img src="wine_glass.png">
    </div>

    <?= "Hello World" ?>
</body>
</html>