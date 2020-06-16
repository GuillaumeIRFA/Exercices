<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP & MySQL</title>
</head>
<body>
    <h1>Titre Principal</h1>
    <?php
        $x = null;
        echo "La valeur de \$x globale est : ", $x, "<br>";

        function sayX() {
            $x = 5;
            echo "La valeur de \$x locale est : ", $x, "<br>";
        }
        sayX();

        $y = 1;
        echo "\$y contient la valeur : ", $y, "<br>";
        echo "\$y contient la valeur : ", $y, "<br>";

        function sayZ() {
            $z = '';
            return $z;
        }
        echo "La variable locale \$z contient : ", sayZ(), "<br>";

        echo "<p>Un paragraphe</p><br>";
    ?>

</body>
</html>