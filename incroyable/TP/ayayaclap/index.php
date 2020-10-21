<?php

session_start();
// session_unset();

if (isset($_POST['signUp']) && $_POST['signUp'] === "signUp") {
    $_SESSION['signUp'] = true;
}

if(isset($_SESSION['cookies']) && $_SESSION['cookies'] === true) {
    setcookie("xd", "xd", time()+86400);
}

// foreach($_SESSION as $key => $value) {
//     echo "$key => $value<br>";
// }

// unset($_SESSION['cookies']);

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
    <?php if(isset($_SESSION['signUp']) && $_SESSION['signUp'] == true) require_once "inscription.php"; else { ?>

    <?php require_once "navbar.php"; ?>


    <?php require_once "cookiesModal.php"; ?>
    <?php } ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php

?>