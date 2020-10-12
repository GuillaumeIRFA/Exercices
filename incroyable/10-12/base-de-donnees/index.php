<?php

$host = "localhost";
$user = "prom";
$password = "xd";
$database = "maBase";

$maConnection = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()) {
    echo "Kaput =>".mysqli_connect_error()."<br>";
} else {
    echo "Connected<br>";
}

$maRequete = "SELECT nom FROM maTable WHERE nom = 'patricia'";
$mesDivs = "";

function embellisMaRequete($array) {

    $avant = "Son prénom c'est ";
    $apres = " et voilà. <br> <hr>";

    $prenom = $array['nom'];

    $maPhrase = $avant.$prenom.$apres;

    global $mesDivs;
    $mesDivs .= $maPhrase;
}

if($result = mysqli_query($maConnection, $maRequete)){

    while($firstLine = mysqli_fetch_array($result)) {
        
        embellisMaRequete($firstLine);

    }

} else {
    echo "Failure<br>";
}


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

    <?= $mesDivs ?>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>