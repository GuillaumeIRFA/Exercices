<?php

//------------------------------------------------------

$nom = "robert";

$message = "coucou";

$onSeConnait = true;


if (($nom == "bob" || $nom == "robert") && $onSeConnait == true) {

    $message .= " " . $nom;
} else {

    $message .= ", je ne te connais pas";
}

//------------------------------------------------------

$reponsePositive = "
    <p>Tiens, voilà du fromage :)</p>
    <img src='img/fromage.png'>
    ";
$reponseNegative = "<p>I S S O U</p>";

$resultat = "Oh mince!";

if (isset($_GET["ouiOuNon"]) && $_GET["ouiOuNon"] == "oui") {
    $resultat .= $reponsePositive;
} else if (isset($_GET["ouiOuNon"]) && $_GET["ouiOuNon"] == "non"){
    $resultat = $reponseNegative;
}

if (isset($_GET["dl"]) && $_GET["dl"] == "dauphin") {
    $resultat .= "Si t'as le Dauphin, va faire du sport! :dogeKek: :thumbsup:";
} else if (isset($_GET["dl"]) && $_GET["dl"] == "licorne") {
    $resultat = "LICORNE";
}

//------------------------------------------------------


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Title</title>
</head>

<body>


    <p>Un peu de texte</p>

    <!-- <p><?php echo $message . " " . $nom; ?></p> -->

    <!-- <p><?= $nom == "bob" ? $message . " " . $nom : $message . ", ptdr t'es qui?"; ?></p> -->

    <!-- <p><?= $nom == "bob" && $onSeConnait == true ? "${message} ${nom}" : "${message}, je ne te connais pas"; ?><p> -->

    <p><?= $message; ?></p>

    <br><br>

    <hr>
    <p>Tu veux voir ma fourme ?</p>

    <form action="">

        <!-- <input type="text" name="ouiOuNon" id=""> -->
        <!-- <input type="text" name="unAutreInput" id=""> -->
        <label for="oui">Oui</label>
        <input type="radio" name="ouiOuNon" id="oui" value="oui" <?= (isset($_GET["ouiOuNon"]) && $_GET["ouiOuNon"] == "oui") || !isset($_GET["ouiOuNon"]) ? "checked" : null; ?>>
        <label for="non">Non</label>
        <input type="radio" name="ouiOuNon" id="non" value="non" <?= isset($_GET["ouiOuNon"]) && $_GET["ouiOuNon"] == "non" ? "checked" : null; ?>>
        <!--  -->
        <input type="submit" class="btn" value="I'm clickable">

    </form>

    <hr>
    <p>Dauphin ou Licorne?</p>
    <form action="">

        <label for="dl-d">Dauphin</label>
        <input type="radio" name="dl" id="dl-d" value="dauphin" <?= (isset($_GET["dl"]) && $_GET["dl"] == "dauphin") || !isset($_GET["dl"]) ? "checked" : null; ?>>
        <label for="dl-l">Licorne</label>
        <input type="radio" name="dl" id="dl-l" value="licorne" <?= isset($_GET["dl"]) && $_GET["dl"] == "licorne" ? "checked" : null; ?>>

        <input type="submit" class="btn" value="I'm clickable">

    </form>
    <hr>

    <div class="resultat"><?= $resultat ?></div>

    <br>
    <br>
    <br>

    <!-- <p><?= isset($_GET["ouiOuNon"]) ? $_GET["ouiOuNon"] : "C'est vide atm"; ?></p> -->
    <!-- <p><?= @$_GET["ouiOuNon"]; ?></p> -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>