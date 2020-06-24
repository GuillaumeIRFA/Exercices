<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 8 - Exercice 1</title>
</head>
<body>
    <?php
        echo "Bonjour " . $_POST['sexe'] == "homme" ? "Mr " : "Mme " . $_POST['nom'] . ".";
    ?>
</body>
</html>