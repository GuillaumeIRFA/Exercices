<?php

session_start();

foreach ($_POST as $key => $value) {
    echo "POST $key => $value<br>";
}

foreach ($_SESSION as $key => $value) {
    echo "SESSION $key => $value<br>";
}

$host = 'localhost';
$user = 'prom';
$password = 'xd';
$dababase = 'liste_de_courses';

$connection = mysqli_connect($host, $user, $password, $dababase);

require_once "generateBootstrapTableFromTable.php";
require_once "generateSelectInputFromTable.php";
require_once "deleteEntryInTable.php";
require_once "insertEntryInTable.php";
require_once "updateEntryInTable.php";
require_once "login.php";

if (isset($_POST['signUp']) && $_POST['signUp'] == true) {
    $_SESSION['signUp'] = true;
}

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $_SESSION['verifiedUser'] = true;
}

if (isset($_POST['deleteEntry'])) {
    deleteEntryInTable($connection, 'articles', $_POST['deleteEntry']);
}

if (isset($_POST['toggleEntry'])) {
    updateEntryInTable($connection, 'articles', [$_POST['toggleEntry']]);
}

if (isset($_POST['updateEntry'])) {
    updateEntryInTable($connection, 'articles', [$_POST['updateEntry'], $_POST['nom']]);
}

if (isset($_POST['addArticle-nom']) && $_POST['addArticle-nom'] != '') {
    insertEntryInTable($connection, 'articles', $_POST['addArticle-nom']);
}

$bootstrapTable = false;
if (isset($_SESSION['ID'])) {
    $bootstrapTable = generateBootstrapTableFromTable($connection, 'articles');
}

$loginContainer = '';

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
    <title>Liste des courses ENHANCED</title>
</head>

<body>
    <?php
    if ((isset($_SESSION['signUp']) && $_SESSION['signUp'] == true)) {
        require_once "inscription.php";
    } else {

        echo "<nav class='navbar navbar-expand-lg navbar-light bg-light customNav'>";
        echo "<h3>Ma liste de courses</h3>";
        require_once "loginForm.php";
        echo "</nav>";

        if ($bootstrapTable) {
            echo $bootstrapTable;

            echo "
            <nav class='navbar navbar-expand-lg navbar-light bg-light addArticle'>
                <form method='POST' class='customForm'>
                    <div class='form-group'>
                        <input type='text' name='addArticle-nom' class='form-control champ-ajout' placeholder='Ajouter un nouvel article à la liste'>
                    </div>
                    <div class='form-group'>
                        <button type='input' class='btn btn-success bouton-ajout'>Ajouter</button>
                    </div>
                </form>
            </nav>
            ";
        }
    }


    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php

foreach ($_POST as $key => $value) {
    echo "POST $key => $value<br>";
}

foreach ($_SESSION as $key => $value) {
    echo "SESSION $key => $value<br>";
}
?>