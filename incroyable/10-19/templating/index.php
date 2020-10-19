<?php

require_once "controller/templateController.php";
require_once "model/selectCards.php";


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

    <?php

    echo genereUnTemplateToutPret("view/navbar.php", true);
    ?>
    <div class="container mt-5">
        <div class="row justify-content-between">
            <form method="POST">
                <button type="submit" class="form-control btn btn-secondary" name="showAllMovies">Show all movies</button>
            </form>
            <form method="POST" class="form-group">
                <input type="text" class="form-control" name="movieName">
                <button type="submit" class="form-control btn btn-secondary" name="showThisMovie">Find this movie</button>
            </form>
            <form method="POST">
                <button type="submit" class="form-control btn btn-secondary" name="showAllMoviesByDate">Show all movies dy release date</button>
            </form>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row justify-content-around">
            

            <?php

            if(isset($_POST["showAllMovies"])) {
                foreach (selectAllCard() as $card) {
                    echo genereUnTemplateToutPret("view/monTemplateDeCard.php", $card);
                }
            }

            if(isset($_POST["showThisMovie"]) && isset($_POST["movieName"])) {
                echo genereUnTemplateToutPret("view/monTemplateDeCard.php", selectCard($_POST["movieName"]));
            }

            if(isset($_POST["showAllMoviesByDate"])) {
                foreach (selectAllCard(true) as $card) {
                    echo genereUnTemplateToutPret("view/monTemplateDeCard.php", $card);
                }
            }

            ?>
        </div>
    </div>
    <?


?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>