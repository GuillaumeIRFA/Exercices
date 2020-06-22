<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['colors'])) {
            $colors = $_GET['colors'];
            foreach ($colors as $color) {
                echo "<div style='background:$color; width: 50px; height: 50px;'></div>";
            }
        }
    ?>
    <form action="test.php">
        <input type="checkbox" name="colors[]" value="red">Rouge<br>
        <input type="checkbox" name="colors[]" value="yellow">Jaune<br>
        <input type="checkbox" name="colors[]" value="green">Vert<br>
        <input type="checkbox" name="colors[]" value="blue">Bleu<br>
        <input type="checkbox" name="colors[]" value="purple">Violet<br>
        <input type="submit" value="Confirmer">
    </form>
</body>
</html>