<?php

$trustableUser = false;

$membres = array(
    'guillaume' => 'xd',
);

if (isset($_GET["username"]) && isset($_GET["password"]) && isset($membres[$_GET["username"]]) && $membres[$_GET["username"]] == $_GET["password"]) {

    $currentUser = [$_GET["username"], $_GET["password"]];
    $trustableUser = true;
}

$bienvenue = $trustableUser ? "<h2>Bienvenue ".ucfirst($currentUser[0])."</h2>" : "";

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
    <title>Upload File Form</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light customNav">
        <?= $bienvenue ?>

        <form class="login-form">

            <input class="form-control" type="text" name="username" placeholder="identifiant">
            <input class="form-control" type="password" name="password" placeholder="mot de passe">
            <button class="btn btn-primary" type="submit">Connection</button>

        </form>

    </nav>

    <?php if($trustableUser) include("uploadFileForm.php") ?>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>