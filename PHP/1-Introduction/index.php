<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
        echo "Bonjour, je suis un script PHP!<br>";
    ?>
    <?php
        include "./nomfichier.php";
    ?>
    <?php
        if ((int)date("H") < 12) echo "Bon matin!<br>";
        else echo "Bonne après-midi!<br>";
    ?>
</body>
</html>