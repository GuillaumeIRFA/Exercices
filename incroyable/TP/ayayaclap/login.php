<?php

require_once "authentication.php";
session_start();

if(isset($_POST['signOut']) && $_POST['signOut'] == 'signOut') {
    session_unset();
}

if(isset($_POST['signIn']) && $_POST['signIn'] === "signIn" && isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['password']) && $_POST['password'] != "") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($retrieveUserCredentials = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM utilisateurs WHERE nom = '$username'"))) {
        if(md5($retrieveUserCredentials['id']).md5($password) == $retrieveUserCredentials['mot_de_passe']) {
            $_SESSION['id'] = $retrieveUserCredentials['id'];
            $_SESSION['username'] = $username;
            // $_SESSION['verifiedUser'] = true;
        }
    }
}

?>