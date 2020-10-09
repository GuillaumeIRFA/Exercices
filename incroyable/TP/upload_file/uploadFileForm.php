<?php

require_once 'vendor/autoload.php';
require_once 'credentials.php';

define("UPLOAD_PATH", "upload/");

$warning = "";

$recipient_email = $sender_email = $sender_name = $sender_message = $sender_file = $sender_file_confirm = false;
$download_link = false;
$allowed_extensions = ["jpg", "jpeg", "png", "gif"];

function folderSize ($dir)
{
    $size = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? filesize($each) : folderSize($each);
    }

    return $size;
}

if (isset($_POST["recipient_email"])) {
    if ($_POST["recipient_email"] != "") {
        $recipient_email = htmlspecialchars($_POST['recipient_email']);
    } else {
        $warning .= "Veuillez renseigner le champ \"Email destinaire\".<br>";
    }
}

if (isset($_POST["sender_email"])) {
    if ($_POST["sender_email"] != "") {
        $sender_email = htmlspecialchars($_POST['sender_email']);
    } else {
        $warning .= "Veuillez renseigner le champ \"Email expéditeur\".<br>";
    }
}

if (isset($_POST["sender_name"])) {
    if ($_POST["sender_name"] != "") {
        $sender_name = htmlspecialchars($_POST['sender_name']);
    } else {
        $warning .= "Veuillez renseigner le champ \"Votre nom\".<br>";
    }
}

if (isset($_POST["sender_message"])) {
    if ($_POST["sender_message"] != "") {
        $sender_message = htmlspecialchars($_POST["sender_message"]);
    } else {
        $warning .= "Veuillez renseigner le champ \"Votre message\".<br>";
    }
}

if (isset($_FILES["sender_file"])) {
    if ($_FILES["sender_file"]["name"] != "") {
        $sender_file = $_FILES["sender_file"];

        $file_infos = pathinfo($sender_file['name']);
        if (in_array($file_infos['extension'], $allowed_extensions)) {
            $valid_extension = true;
        } else {
            $valid_extension = false;
            $warning .= "Extension invalide, format authorisés : JPG, JPEG, PNG, GIF.<br>";
        }


        $file_attributes = getimagesize($sender_file['tmp_name']);
        if ($file_attributes["0"] <= 1600 && $file_attributes["1"] <= 900) {
            $valid_attributes = true;
        } else {
            $valid_attributes = false;
            $warning .= "Dimensions invalides (max 1600*900).<br>";
        }

        if ($sender_file['size'] <= 153600) {
            if ($sender_file['size'] + folderSize(UPLOAD_PATH) <= 10485760) {
                $valid_size = true;
            } else {
                $valid_size = false;
                $warning .= "Le dossier ".UPLOAD_PATH." est plein.<br>"; 
            }
        } else {
            $valid_size = false;
            $warning .= "Le fichier est trop volumineux (max 150ko).<br>";
        }

        if ($valid_extension && $valid_attributes && $valid_size) {
            if (move_uploaded_file($sender_file['tmp_name'], UPLOAD_PATH . $sender_file['name'])) {

                // $zip = new ZipArchive;
                // if ($zip->open('test.zip') === TRUE) {
                //     $zip->addFile($sender_file['name']);
                //     $zip->close();
                // } else {
                //     $warning .= "Echec de l'archivage";
                // }

                $sender_file_confirm = true;
                $download_link = "Vous pouvez télécharger votre fichier en cliquant sur <a href='download.php?filename=" . $sender_file['name'] . "'>" . $sender_file['name'] . "</a><br>";
            } else {
                $warning .= "Le fichier n'a pas pu être enregistré sur le serveur";
            }
        }
    } else {
        $warning .= "Veuillez renseigner le champ \"Votre fichier\".<br>";
    }
}

if ($recipient_email && $sender_email && $sender_name && $sender_message && $sender_file && $sender_file_confirm) {

    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
        ->setUsername(EMAIL)
        ->setPassword(PASSWORD);

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Test'))
        ->setFrom([$sender_email  => $sender_name])
        ->addTo($recipient_email)
        ->setBody($sender_message, 'text/html')
        ->attach(Swift_Attachment::fromPath(UPLOAD_PATH . $sender_file['name']));

    if ($mailer->send($message)) {
        $warning .= "Votre message a correctement été envoyé.<br><br>";
    } else {
        $warning .= "Échec de l'envoi du message.<br><br>";
    }
} else {
    // $warning .= "Corrigez les erreurs si dessus pour continuer.<br><br>";
}

?>

<div class='container'>
    <div class='row customRow'>
        <form method='POST' enctype='multipart/form-data' class='file-form col-6'>
            <?= $download_link ? $download_link : null ?>
            <?= $warning ?>
            <div class="form-group">
                <label for="recipient_email">Email destinaire</label>
                <input type="email" class="form-control" name="recipient_email" placeholder="Entrez l'email destinaire">
            </div>
            <div class="form-group">
                <label for="sender_email">Email expéditeur</label>
                <input type="email" class="form-control" name="sender_email" placeholder="Entrez votre email">
            </div>
            <div class="form-group">
                <label for="sender_name">Votre nom</label>
                <input type="text" class="form-control" name="sender_name" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="sender_message">Votre message</label>
                <textarea class="form-control" name="sender_message" rows="9"></textarea>
            </div>
            <div class='form-group'>
                <label for='sender_file'>Votre fichier</label>
                <input type='file' class='form-control-file' name='sender_file'>
            </div>
            <button type='submit' class='btn btn-primary w-100'>Envoyer</button>
        </form>
    </div>
</div>