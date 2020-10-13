<?php

function insertEntryInTable($connection, $table, $entryData) {

    $query = "INSERT INTO `$table` (`nom`, `acheté`) VALUES ('$entryData', '0')";
    
    if (mysqli_query($connection, $query)) {
        echo $query."<br>Query Success<br>";
    } else {
        echo $query."<br>Query Failure<br>";
    }

}

?>