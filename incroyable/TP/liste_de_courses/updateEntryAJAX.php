<?php

require_once "authentication.php";

if(isset($_POST['toggleEntry'])) {

    if($response = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM articles WHERE id = '$_POST[toggleEntry]'"))) {
        if(mysqli_query($connection, "UPDATE articles SET acheté = ".($response['acheté'] === '0' ? '1' : '0')." WHERE id = '$_POST[toggleEntry]'")) {
            
        } else {
            echo "Could not toggle 'acheté' value";
        }
    } else {
        echo "WTF just happened? :monkaW:<br>";
    }

}

// if(count($entry) > 1) {

//     $query = "UPDATE `$table` SET `nom` = '$entry[1]' WHERE `$table`.`id` = '$entry[0]'";

//     if(mysqli_query($connection, $query)) {
//         // echo $query . "<br>Query Success<br>";
//     } else {
//         // echo $query . "<br>Query Failure<br>";
//     }


// }



?>
