<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $tableau3D = array(
            array(1,2,3,4,5,6),
            array(1,2,3,4,5,6,7),
            array(1,2,3,4,5,6,7,8),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9,10),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8)
        );
        $cellsCount = 0;
        echo "<table border='1'><tbody>";
        for ($i = 0; $i < count($tableau3D); $i++) {
            echo "<tr>";
            // $cellsCount += count($tableau3D[$i]);
            for ($j = 0; $j < count($tableau3D[$i]); $j++) {
                echo "<td>Pos y:x -> ".$i.":".$j." value -> ".$tableau3D[$i][$j]."</td>";
                $cellsCount++;
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "Le tableau possède $cellsCount valeurs<hr>";

    ?>
</body>
</html>