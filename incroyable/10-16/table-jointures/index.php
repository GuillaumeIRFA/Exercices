<?php

$host = 'localhost';
$user = 'prom';
$password = 'xd';
$database = 'ecole';

$connection = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()) {
    die("Could not connect to the database " . mysqli_connect_error() . "<br>");
} else {
    echo "Connected to the database '$database' as '$user@$host'.<br>";
}

    // $query = "SELECT * FROM eleves e INNER JOIN parents p ON e.prenom = 'julie' AND p.id = e.parent_id";
    $query = "SELECT * FROM eleves e LEFT JOIN parents p ON e.parent_id = p.id WHERE e.prenom = 'julie'";

    if ($result = mysqli_query($connection, $query)) {

        echo "Query Success => $query<br>";

        echo "<table class='table table-dark table-striped'><thead><th>id</th><th>prenom</th><th>age</th><th>couleur</th><th>parent_id =></th><th><= id</th><th>prenom</th><th>age</th></thead><tbody>";
        echo "<tr>";
        while($line = mysqli_fetch_array($result)) {
            $i = 0;
            foreach($line as $key => $value) {
                if ($key == $i){
                    echo "<td>$value</td>";
                    $i++;
                }
            }
        }
        echo "</tr>";
        echo "</tbody></table>";

    } else {
        echo "Query Failure<br>$query<br>";
    }
    // INNER JOIN `parents` WHERE = `eveles`.`prenom` = 'julie', `parents`.`prenom` = 'fabrice'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>