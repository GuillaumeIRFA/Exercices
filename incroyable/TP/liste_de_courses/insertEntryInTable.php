<?php

function insertEntryInTable($connection, $table, $entryData) {

    $query = "INSERT INTO $table (nom, acheté, miniature, id_utilisateur) VALUES ('$entryData', '0', '123.png', '$_SESSION[ID]')";
    
    if (mysqli_query($connection, $query)) {
        echo $query."<br>Query Success<br>";
    } else {
        echo $query."<br>Query Failure<br>";
    }

    if(!mysqli_fetch_array(mysqli_query($connection, "SELECT nom FROM articles_historique WHERE nom = '$entryData'"))) {

        mysqli_query($connection, "INSERT INTO articles_historique (nom, miniature) VALUES ('$entryData', '123.png')");
       
    }
}

?>
