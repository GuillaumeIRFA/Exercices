<?php

require_once 'vendor/autoload.php';
require_once 'credentials.php';

$warning = "";

$email = $message = false;

$destinataire = "promtestmailxd@gmail.com";

$sujet = "Test";

if (isset($_GET["email"])) {
    if ($_GET["email"] != "") {
        $email = ($_GET['email']);
    } else {
        $warning .= "Veuillez renseigner le champ \"Adresse email\".<br>";
    }
}

if (isset($_GET["message"])) {
    if ($_GET["message"] != "") {
        $message = htmlspecialchars($_GET["message"]);
    } else {
        $warning .= "Veuillez renseigner le champ \"Votre message\".<br>";
    }
}

if ($email && $message) {

        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
            ->setUsername(EMAIL)
            ->setPassword(PASSWORD)
        ;

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message())
            ->setSubject('This is a test message')
            ->setFrom([$email  => 'placeholder'])
            ->addTo($destinataire)
            ->setBody($message, 'text/html')
        ;

        if($mailer->send($message)) {
            echo "Success";
        } else {
            echo "Failure";
        }

    // if (mail($destinataire, $sujet, $message, $headers)) {
    //     $warning = "Votre message a correctement été envoyé.<br><br>";
    // } else {
    //     $warning = "Échec de l'envoi du message.<br><br>";
    // }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Title</title>
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center">

            <form class="col-6 mt-5">
                <?= $warning ?>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea class="form-control" name="message" rows="9"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>4
    <script src="js/main.js"></script>
</body>

</html>