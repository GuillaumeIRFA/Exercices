<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les noms des variables valides sont:</h1><br><br>
    <?php
        // var = "var";
        $mvar = "\$mvar";
        $var7 = "\$var7";
        $_mvar = "\$_mvar";
        $_6var = "\$_6var";
        $_élément1 = "\$_élément1";
        // $hotel4* = "\$hotel4*";

        echo "$mvar<br>$var7<br>$_mvar<br>$_6var<br>$_élément1<br>";
        define("__bonjour__", -5);
        echo __bonjour__;
        echo nl2br("bonjour\rbonjour\rbonjour\rbonjour\rbonjour\rbonjour\rbonjour\r");

    ?>
</body>
</html>