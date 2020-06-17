<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "On peut tester l'existence d'une variable avec la fonction 'isset(variable)'<br><br>";
        $variable = 5;
        echo "\$variable = 5; <br>isset(\$variable)<br>";
        echo isset($variable) ? "\$variable existe!<br>" : "\$variable n'existe pas!<br>";
        echo "<br>";
        echo "test = bonjour; <br>isset(\$test)<br>";
        echo isset($test) ? "\$test existe!<br>" : "\$test n'existe pas!<br>";
    ?>
</body>
</html>