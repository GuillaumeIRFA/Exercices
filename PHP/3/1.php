<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setlocale(LC_ALL, 'fr_FR'); // A titre d'exemple
        $date1 = new DateTime('2020-06-17');
        $date2 = new DateTime('2020-06-15');
        echo $date1->format("l d F Y")."<br>";
        echo $date2->format("l d F Y")."<br>";
        // echo strftime("%d %B %Y", $date1->getTimestamp()) ."<br>". strftime("%d %B %Y", $date2->getTimestamp()) ."<br>";
        $difference = $date1->diff($date2);
        echo $difference->format("%a") > 1 ? $difference->format("%a jours") : $difference->format("%a jour");
    ?>
</body>
</html>