<?php

function insertEntryInTable($connection, $table, $entryData) {

    $query = "INSERT INTO `$table` (`nom`, `animal`, `couleur`, `plat`) VALUES ('$entryData[0]', '$entryData[1]', '$entryData[2]', '$entryData[3]')";
    
    if (mysqli_query($connection, $query)) {
        echo $query."<br>Query Success<br>";
    } else {
        echo $query."<br>Query Failure<br>";
    }

}

?>