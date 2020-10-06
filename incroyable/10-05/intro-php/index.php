<?php

$maVariable = "Robert";

echo "<p>COUCOU<p>";

for ($i = 0; $i < 4; $i++) {
    echo "<br>" . $maVariable;
}

echo "<br>";
$unBoutDePhrase = "je suis un bout de phrase ";
$laSuite = "et moi je suis la suite de la phrase";

// echo $unBoutDePhrase, $laSuite; // plusieurs paramètres
echo $unBoutDePhrase . $laSuite; // concaténation

$trenteQuatre = 34;

echo "<br>";
echo "le résultat est " . ($trenteQuatre * 45 / 6);

$maBouleEtAine = false;
$monAutreBouleEtAine = true;

// echo `<br>${maBouleEtAine}`;

echo "<br>";
var_dump($maBouleEtAine);
echo "<br>";
var_dump($monAutreBouleEtAine);

echo "<br>";
echo $maBouleEtAine ? "ELLE EXISTE !" : "ELLE EXISTE PAS !";
echo "<br>";
echo $monAutreBouleEtAine ? "ELLE EXISTE !" : "ELLE EXISTE PAS !";



$monTableau = array("luc", "patricia", "pascal", "dauphin");

echo "<br>";
print_r($monTableau);

$monTableau[2] = "pascalou";
echo "<br>";
print_r($monTableau);

array_push($monTableau, "crevette");
echo "<br>";
print_r($monTableau);

$monTableau[] = "capuchon";
echo "<br>";
print_r($monTableau);

$monTableau["laSoeurDuFacteur"] = "josianne";
echo "<br>";
echo $monTableau["laSoeurDuFacteur"];

echo "<br>";
echo count($monTableau);
echo "<br>";
echo sizeof($monTableau);

$mesTrucs = array(
    "outil" => "tournevis",
    "couvert" => "une fourchette",
    "bijou" => "un bracelet",
    "couvre-chef" => "un fedora noir mais avec des pois bleus et verts"
);

echo "<br>";
echo "<br>";
print_r($mesTrucs);

echo "<br>";
foreach ($mesTrucs as $key => $value) {
    echo "<br>" . $key . " => " . $value . ".";
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


    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <div class="container">
        <div class="row">

            <?php foreach ($mesTrucs as $key => $value) { ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $key ?></h5>
                        <p class="card-text"><?= $value ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>