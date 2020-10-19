<?php

$host = 'localhost';
$user = 'prom';
$password = 'xd';
$dababase = 'maBase';

$connection = mysqli_connect($host, $user, $password, $dababase);

if (mysqli_connect_error()) {
    die("Could not connect to the database " . mysqli_connect_error() . "<br>");
} else {
    echo "Connected to the database<br>";
}


if (isset($_POST['username']) && isset($_POST['password'])) {

    $login_username = $_POST['username'];
    $login_password = $_POST['password'];

    if ($login_username != "" && $login_password != "") {

        $query = "SELECT * FROM `utilisateurs` WHERE `utilisateurs`.`nom` = '$login_username'";

        if ($result = mysqli_query($connection, $query)) {

            echo "Query Success<br>";
            $line = mysqli_fetch_array($result);

            if ($line) {
                echo "This user exists<br>";
                if ($line['motDePasse'] == $login_password) {
                    echo "Login Successful<br>";
                } else {
                    echo "Login failed: wrong password<br>";
                }
            } else {
                echo "This user doesn't exists<br>";
            }
        } else {
            echo "Query Failure<br>";
        }
    }
} else {
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
    <title>Accueil - connection</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>