<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="button" onclick="doStuff()">

    <script type="text/javascript">
        function doStuff() {
            let name = "Jee";
            window.location.href = "test.php?name=" + name;
        }
    </script>
    
    <?php
        echo isset($_GET['name']) ? $name = $_GET['name'] : null;
    ?>
</body>
</html>