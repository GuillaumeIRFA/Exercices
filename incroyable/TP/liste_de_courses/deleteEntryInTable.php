<?php 

function deleteEntryInTable($connection, $table, $id) {
    
    $query = "DELETE FROM $table WHERE id = '$id' AND id_utilisateur = $_SESSION[ID]";
    
    if (mysqli_query($connection, $query)) {
        echo $query."<br>Query Success<br>"."AAAAAAAAAAAAAAAAAANNNNNNNNNNNNNNNDDDD It's gone!<br>";
    } else {
        echo $query."<br>Query Failure<br>";
    }

}

?>