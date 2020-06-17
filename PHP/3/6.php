<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("JOUR_DE_LA_SEMAINE", [
            "Lu"=>"Lundi", 
            "Ma"=>"Mardi", 
            "Me"=>"Mercredi", 
            "Je"=>"Jeudi", 
            "Ve"=>"Vendredi", 
            "Sa"=>"Samedi", 
            "Di"=>"Dimanche",
            ]);
        
        foreach (JOUR_DE_LA_SEMAINE as $j => $jour)
        {
            echo "$j $jour<br>";
        }
    ?>
</body>
</html>