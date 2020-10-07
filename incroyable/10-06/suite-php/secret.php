<?php

$motDePasse = "KEKW";
$monSecret = "Je suis une mite en pull-over";

$resultat = isset($_GET['demande']) && $_GET['demande'] == "secret" && isset($_GET['pas-sword']) && $_GET['pas-sword'] == $motDePasse ? $monSecret: "";

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

    <form action="">
        <input type="text" name="pas-sword" placeholder="This is a not a sword">
        <input type="submit" value="secret" name="demande">
    </form>

    <div class="secret">
        <p><?= $resultat; ?></p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>