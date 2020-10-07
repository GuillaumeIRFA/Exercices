<?php

$trustableUser = false;

$membres = array(
    'charles' => 'peepoPat',
    'clement' => '#HeChanged',
    'guillaume' => 'discordDictator',
    'joel' => '<3',
    'erwan' => 'ErForceWan',
    'jee' => 'splif'
);

if (isset($_GET["utilisateur"]) && isset($_GET["motDePasse"]) && isset($membres[$_GET["utilisateur"]])) {

    $currentUser = [$_GET["utilisateur"], $_GET["motDePasse"]];
    $trustableUser = true;
    
}

$defaultContent = 
    "<div class='defaultCard'>
        <p class='defaultCard-text'>Pour voir du contenu, connectez vous.</p>
    </div>";

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

    <nav class="navbar navbar-expand-lg navbar-light bg-light customNav">

        <div class="logo"></div>

        <form>

            <input class="form-control" type="text" name="utilisateur" placeholder="identifiant">
            <input class="form-control" type="password" name="motDePasse" placeholder="mot de passe">
            <button class="btn btn-primary" type="submit">Connection</button>

        </form>

    </nav>



    <div class="container">
        <div class="row customRow">

            <?php

            if ($trustableUser) {
                for ($i = 0; $i < 6; $i++) {
                    include("card-template.php");
                }
            } else { 
                echo $defaultContent;
            }

            ?>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>