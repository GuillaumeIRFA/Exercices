<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function auCarre($debut, $fin) {
            echo "<ul>";
            for ($i = $debut; $i <= $fin; $i++) {
                echo "<li>Le carré de $i est : ". $i*$i ."</li>";
            }
            echo "</ul>";
        }
        auCarre(1,20);
    ?>
</body>
</html>