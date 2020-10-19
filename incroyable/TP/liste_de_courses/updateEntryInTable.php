<?php

function updateEntryInTable($connection, $table, array $entry) {

    if(count($entry) > 1) {

        $query = "UPDATE `$table` SET `nom` = '$entry[1]' WHERE `$table`.`id` = '$entry[0]'";

        if(mysqli_query($connection, $query)) {
            echo $query . "<br>Query Success<br>";
        } else {
            echo $query . "<br>Query Failure<br>";
        }

    } else {

        $query = "SELECT * FROM `$table` WHERE `id` = '$entry[0]'";

        if ($response = mysqli_fetch_array(mysqli_query($connection, $query))) {

            $query = "UPDATE `$table` SET `acheté` = ".($response['acheté'] === '0' ? '1' : '0')." WHERE `$table`.`id` = '$entry[0]'";

            if(mysqli_query($connection, $query)) {
                echo $query . "<br>Query Success<br>";
            } else {
                echo $query . "<br>Query Failure<br>";
            }

        } else {
            echo $query . "<br>Query Failure<br>";
        }

    }

}

?>
