<?php

function updateEntryInTable($connection, $table, $entry) {

    $query = "SELECT * FROM `$table` WHERE `id` = '$entry'";

    if ($response = mysqli_fetch_array(mysqli_query($connection, $query))) {

        $query = "UPDATE `liste_de_courses` SET `acheté` = ".($response['acheté'] === '0' ? '1' : '0')." WHERE `liste_de_courses`.`id` = '$entry'";

        if(mysqli_query($connection, $query)) {
            echo $query . "<br>Query Success<br>";
        } else {
            echo $query . "<br>Query Failure<br>";
        }

    } else {
        echo $query . "<br>Query Failure<br>";
    }

}

?>
