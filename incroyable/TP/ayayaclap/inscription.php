<?php

require_once "authentication.php";

$inscriptionFormWarning = "";

if (isset($_POST['newUserUsername']) && isset($_POST['newUserPassword']) && isset($_POST['newUserPasswordConfirm'])) {

    $newUserUsername = $_POST['newUserUsername'];
    $newUserPassword = $_POST['newUserPassword'];
    $newUserPasswordConfirm = $_POST['newUserPasswordConfirm'];

    if ($newUserUsername != "" && $newUserPassword != "" && $newUserPasswordConfirm != "") {

        if ($newUserPassword == $newUserPasswordConfirm) {

            $newUserUsername = mysqli_real_escape_string($connection, $newUserUsername);
            $newUserPassword = mysqli_real_escape_string($connection, $newUserPassword);
            
            if (mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM utilisateurs WHERE nom = '$newUserUsername'"))) {
                $inscriptionFormWarning = "This username is already taken, please choose another.";
            } else {

                $mdpmd5 = md5($newUserPassword);
                $randomHash = md5(uniqid(rand(), true));

                if (mysqli_query($connection, "INSERT INTO utilisateurs (nom, mot_de_passe, verify_link, is_verified) VALUES ('$newUserUsername', '$mdpmd5', '$randomHash', '0')")) {

                    $result = mysqli_fetch_array(mysqli_query($connection, "SELECT id, mot_de_passe FROM utilisateurs WHERE nom = '$newUserUsername'"));
                    $megamd5 = md5($result['id']) . $result['mot_de_passe'];
                    mysqli_query($connection, "UPDATE utilisateurs SET mot_de_passe = '$megamd5' WHERE nom = '$newUserUsername'");

                    $inscriptionFormWarning = "Account succesfully created<br><a href='index.php'>Go back</a>";
                    unset($_SESSION['signUp']);
                    $_SESSION['username'] = $newUserUsername;
                    $_SESSION['id'] = $result['id'];
                } else {
                    $inscriptionFormWarning = "It broke!";
                }
            }
        } else {
            $inscriptionFormWarning = "Both passwords needs to be the same.";
        }
    } else {
        $inscriptionFormWarning = "All the fields are required.";
    }
} ?>

<div class='container'>
    <div class='row d-flex justify-content-center'>
        <form method='POST' class='d-flex flex-column align-items-center'>

            <?php if (isset($_SESSION['signUp']) && $_SESSION['signUp'] === true) { ?>

                <h4>Inscription</h4>
                <div class='form-group m-2'>
                    <input type='text' name='newUserUsername' class='form-control' placeholder='Username: '>
                </div>
                <div class='form-group m-2'>
                    <input type='password' name='newUserPassword' class='form-control' placeholder='Password:'>
                </div>
                <div class='form-group m-2'>
                    <input type='password' name='newUserPasswordConfirm' class='form-control' placeholder='Confirm password:'>
                </div>
                <div class='form-group m-2'>
                    <button type='submit' class='btn btn-primary'>Envoyer</button>
                </div>
                <div class='text-center'>
                    <?= $inscriptionFormWarning ?>
                </div>

            <?php } else { ?>
                <div class='text-center'>
                    <?= $inscriptionFormWarning ?>
                </div>
            <?php } ?>

        </form>
    </div>
</div>