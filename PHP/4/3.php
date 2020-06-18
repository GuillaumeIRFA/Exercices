<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function capitalizeWords($string) {
            return ucwords(strtolower($string));
        }
        echo capitalizeWords("jE sUis uNe CHAinE de CAractèREs! :)");
    ?>
</body>
</html>