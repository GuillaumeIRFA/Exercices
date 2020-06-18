<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Version de PHP éxecuté sur le serveur: ", phpversion();
        echo "<br>";
        echo "Système d'exploitation du serveur: ", PHP_OS;
        echo "<br>";
        echo "Version OS serveur extended", php_uname();
        echo "<br>";
        echo phpinfo();
        echo "<br>";
    ?>
</body>
</html>