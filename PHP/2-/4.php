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
        $x = 10;
        echo "La valeur de \$x globale est : ", $x, "<br>";
        function add5($number) {
            $number += 5;
            return $number;
        }
        $x = add5($x);
        echo "\$x contient maintenant : ", $x, "<br>";

        /* OU ALORS TOUT SIMPLEMENT*/
        // $x += 5;
        // echo "\$x contient maintenant : ", $x, "<br>";

        echo "<p>Un paragraphe</p>"
    ?>

</body>
</html>