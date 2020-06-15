<?php 
    $date_jour = date("l");
    $date_numero = date("d/m/Y");
    $date_heure = date("H");
    $date_minute = date("i");

    switch ($date_jour) {
        case "Monday": $date_jour = "Lundi"; break;
        case "Tuesday": $date_jour = "Mardi"; break;
        case "Wednesday": $date_jour = "Mercredi"; break;
        case "Thursday": $date_jour = "Jeudi"; break;
        case "Friday": $date_jour = "Vendredi"; break;
        case "Saturday": $date_jour = "Samedi"; break;
        case "Sunday": $date_jour = "Dimanche"; break;
    }

    echo "Hello PHP, nous somme le ", $date_jour, " ", $date_numero, " à ", $date_heure, ":", $date_minute, ".<br>";
?>