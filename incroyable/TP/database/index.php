<?php

require_once "generateBootstrapTableFromTable.php";
require_once "generateSelectInputFromTable.php";
require_once "deleteEntryInTable.php";
require_once "insertEntryInTable.php";


$host = 'localhost';
$user = 'prom';
$password = 'xd';
$dababase = 'maBase';
$table = 'maTable';

$connection = mysqli_connect($host, $user, $password, $dababase);

if (isset($_POST['deleteEntry'])) {
    deleteEntryInTable($connection, $table, $_POST['deleteEntry']);
}

if (
    isset($_POST['addUser-nom']) && $_POST['addUser-nom'] != '' &&
    isset($_POST['addUser-animal']) && $_POST['addUser-animal'] != '' &&
    isset($_POST['addUser-couleur']) && $_POST['addUser-couleur'] != '' &&
    isset($_POST['addUser-plat']) && $_POST['addUser-plat'] != ''
) {

    $entryData = [$_POST['addUser-nom'], $_POST['addUser-animal'], $_POST['addUser-couleur'], $_POST['addUser-plat']];
    insertEntryInTable($connection, $table, $entryData);
}

if (isset($_GET['animal']) || isset($_GET['couleur']) || isset($_GET['plat'])) {
    $argumentArray = $_GET;
    $bootstrapTable = generateBootstrapTableFromTable($connection, $table, $argumentArray);
} else {
    $bootstrapTable = generateBootstrapTableFromTable($connection, $table);
}

$selectInputAnimal = generateSelectInputFromTable($connection, $table, 'animal');
$selectInputCouleur = generateSelectInputFromTable($connection, $table, 'couleur');
$selectInputPlat = generateSelectInputFromTable($connection, $table, 'plat');

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
    <title>Database Query</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light customNav">

        <form class="customForm">
            <?= $selectInputAnimal ?>
            <?= $selectInputCouleur ?>
            <?= $selectInputPlat ?>
            <button class="form-control btn btn-primary w-auto" type="submit">Search</button>

        </form>

    </nav>

    <?= $bootstrapTable ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light customNav">
        <form method="POST" class="customForm">
            <div class='form-group'>
                <label for='addUser-nom'>nom</label>
                <input type='text' name='addUser-nom' class='form-control' placeholder='nom :'>
            </div>
            <!-- <div class='form-group'>
                <label for='addUser-animal'>animal</label>
                <input type='text' name='addUser-animal' class='form-control' placeholder='animal :'>
            </div> -->
            <div class='form-group'>
                <label for='addUser-animal'>animal</label>
                <?= $selectInputAnimal ?>
            </div>
            <div class='form-group'>
                <label for='addUser-couleur'>couleur</label>
                <input type='text' name='addUser-couleur' class='form-control' placeholder='couleur :'>
            </div>
            <div class='form-group'>
                <label for='addUser-plat'>plat</label>
                <input type='text' name='addUser-plat' class='form-control' placeholder='plat :'>
            </div>
            <div class='form-group'>
                <button type='input' class='btn btn-success'>Ajouter</button>
            </div>
        </form>
    </nav>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>