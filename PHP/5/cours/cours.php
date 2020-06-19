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
            array( "ligne 0 - colonne 0", "ligne 0 - colonne 1", "ligne 0 - colonne 2" ),
            array( "ligne 1 - colonne 0", "ligne 1 - colonne 1", "ligne 1 - colonne 2" ),
            array( "ligne 2 - colonne 0", "ligne 2 - colonne 1", "ligne 2 - colonne 2" ),
            array( "ligne 3 - colonne 0", "ligne 3 - colonne 1", "ligne 3 - colonne 2" ),
        );

        echo "<h3>Tableau multidimensionnel</h3><table border='1' width=100%><tbody>";
        for ($i = 0; $i < count($tableau3D); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count ($tableau3D[$i]); $j++){
                echo "<td><h3> .. ".$tableau3D[$i][$j]." .. </h3></td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";


        $tableauRange = range(60,69);
        print_r($tableauRange);
        echo "<hr>";
        for ($i = 97; $i <= 122; $i++) {
            $tableauAlpha[$i-97]=chr($i);
        }
        print_r($tableauAlpha);
        echo "<hr>";
        $tableauAlpha2 = range("A", "M");
        print_r($tableauAlpha2);
    ?>
</body>
</html>