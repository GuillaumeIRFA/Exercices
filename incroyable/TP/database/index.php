<?php

require_once "generateBootstrapTableFromTable.php";
require_once "generateSelectInputFromTable.php";


$host = 'localhost';
$user = 'prom';
$password = 'xd';
$dababase = 'maBase';
$table = 'maTable';

$connection = mysqli_connect($host, $user, $password, $dababase);

if (isset($_GET['animal']) && $_GET['animal'] != '') {
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

        <form class="search-form">
            <?= $selectInputAnimal ?>
            <?= $selectInputCouleur ?>
            <?= $selectInputPlat ?>
            <button class="form-control btn btn-primary w-auto" type="submit">Search</button>

        </form>

    </nav>

    <?= $bootstrapTable ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>