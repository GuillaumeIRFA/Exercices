<?php

require_once "model/connection.php";

function selectAllCard($orderByDate = false) {

    global $connection;

    $films = [];
    
    $query = "SELECT `nom` AS 'title', `realisateur` AS 'director', `resume` AS 'resume', `date_sortie` AS 'releaseDate', `url_image` AS 'imageUrl' FROM `films`";
    if($orderByDate) {
        $query .= " ORDER BY releaseDate DESC";
    }

    if($result = mysqli_query($connection, $query))
    {
        while($entry = mysqli_fetch_array($result)) {
            $films[] = $entry;
        }

    } else {
        return "Query failed";
    }

    return $films;
}

function selectCard($name) {

    global $connection;

    $query = "SELECT `nom` title, `realisateur` director, `resume`, date_sortie releaseDate, `url_image` imageUrl FROM Films WHERE nom = '$name'";

    if($film = mysqli_fetch_array(mysqli_query($connection, $query))) {
        return $film;
    } else {
        return "Query failed";
    }
}

?>