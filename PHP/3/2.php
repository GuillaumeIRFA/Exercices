<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $message = "test";
        $$message = 5;

        echo $message."<br>";
        echo $$message."<br>";
        echo $test."<br>";

        echo "<br>La différence entre \$message et \$\$message est que \$\$message utilise le contenu de \$message pour créer une variable dynamique, ainsi, si \$message vaut 'test', alors \$\$message revient à écrire \$test, c'est un alias crée dynamiquement.";
    ?>
</body>
</html>