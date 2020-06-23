<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            background: #DDDDDD;
            padding: 10px;
            border: 1px solid grey;
            font-family: Verdana;
            width: fit-content;
            padding: 2%;
            margin: 50px auto auto auto;
            box-shadow: 3px 3px 10px 2px #CCCCCC;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php
            const FILE_EXTENSION = array('jpg', 'jpeg', 'png', 'bmp', 'vsg', 'gif');
            if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
            {
                if ($_FILES['photo']['size'] <= 10000000)
                {
                    $fileInformations = pathinfo($_FILES['photo']['name']);
                    $extension = $fileInformations['extension'];
                    if (in_array($extension, FILE_EXTENSION))
                    {
                        move_uploaded_file($_FILES['photo']['tmp_name'], 'photo/' . basename($_FILES['photo']['name']));
                    }
                }
            }
        ?>
        <?php 
            $gouts = $_POST['gouts'];
        ?>
        <p>
            Nom : <?= @$_POST['nom']; ?><br>
            Prénom : <?= @$_POST['prenom']; ?><br>
            Sexe : <?= @$_POST['sexe'] === "H" ? "Homme" : "Femme"; ?><br>
            Pays : <?= @ucwords($_POST['pays']); ?><br>

            Email : <?= @$_POST['email']; ?><br>
            Code : <?= @$_POST['password']; ?><hr>

            Goûts : <br><?= implode("<br>", $_POST['gouts']); ?><hr>
            Photo : <br><img src="<?= "./photo/" . basename($_FILES['photo']['name']); ?>"><br>
        </p>
    </div>
</body>
</html>