<?php

$inscriptionFormWarning = "";

if (isset($_POST['newUserUsername']) && isset($_POST['newUserPassword']) && isset($_POST['newUserPasswordConfirm'])) {

    $newUserUsername = $_POST['newUserUsername'];
    $newUserPassword = $_POST['newUserPassword'];
    $newUserPasswordConfirm = $_POST['newUserPasswordConfirm'];

    if ($newUserUsername != "" && $newUserPassword != "" && $newUserPasswordConfirm != "") {

        if ($newUserPassword == $newUserPasswordConfirm) {

            if ($inscriptionFormQueryResult = mysqli_query($connection, "SELECT * FROM utilisateurs WHERE nom = '$newUserUsername'")) {

                if ($inscriptionFormQueryResult = mysqli_fetch_array($inscriptionFormQueryResult)) {

                    $inscriptionFormWarning = "This username is already taken, please choose another.";
                } else {

                    if (mysqli_query($connection, "INSERT INTO utilisateurs (nom, mot_de_passe) VALUES ('$newUserUsername', '$newUserPassword')")) {

                        $inscriptionFormWarning = "Account succesfully created<br><a href='index.php'>Go back</a>";
                        unset($_SESSION['signUp']);
                        $_SESSION['username'] = $newUserUsername;
                        $_SESSION['password'] = $newUserPassword;
                    } else {

                        $inscriptionFormWarning = "It broke!";
                    }
                }
            }
        } else {
            $inscriptionFormWarning = "Both passwords needs to be the same.";
        }
    } else {
        $inscriptionFormWarning = "All the fields are required.";
    }
}

echo "
<div class='container'>
    <div class='row d-flex justify-content-center'>
        <form method='POST' class='d-flex flex-column align-items-center'>
";

if(isset($_SESSION['signUp'])) {
    echo "
            <h4>New account form</h4>
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
                <button type='submit' class='btn btn-primary'>Submit</button>
            </div>
            <div class='text-center'>
                $inscriptionFormWarning
            </div>
    
    ";
} else {
    echo "
            <div class='text-center'>
                $inscriptionFormWarning
            </div>
    ";
}

echo " 
        </form>
    </div>
</div>
";

?>
