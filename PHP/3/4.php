<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $value = 5;
        $samevalue = &$value;
        echo "Pour effectuer un passage par référence, on utilise le symbole & (esperluette) lors de la nouvelle variable, exemple ci dessous :<br>";
        echo "\$value = 5;<br>\$samevalue = &\$value;<br>";
        echo "\$value = $value et \$samevalue = $samevalue<br><br>";
        echo "Si on incrémente \$value ou \$samevalue de 1, la valeur sera incrémenté pour les deux variables de 1, vu qu'elle pointe vers la même valeur enregistré en mémoire, exemple :<br>";
        $value++;
        echo "\$value++, \$value vaut maintenant $value et \$samevalue vaut également $samevalue<br>";
        $samevalue++;
        echo "\$samevalue++, \$samevalue vaut maintenant $samevalue et \$value vaut également $value<br>";
    ?>
</body>
</html>