<?php
    if(isset($_POST['signOut']) && $_POST['signOut'] == 'signOut') {
        session_unset();
    }

    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $_POST['username'] = $_SESSION['username'];
        $_POST['password'] = $_SESSION['password'];
    }

    if(isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['password']) && $_POST['password'] != "") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($retrieveUserCredentials = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM utilisateurs WHERE nom = '$username'"))) {
            if(md5($retrieveUserCredentials['id']).md5($password) == $retrieveUserCredentials['mot_de_passe']) {
                $_SESSION['ID'] = $retrieveUserCredentials['id'];
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['verifiedUser'] = true;
            }
        }
    }
?>