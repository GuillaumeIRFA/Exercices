<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 6</title>
    <style>
        form {
            width: fit-content;
            margin: auto;
        }
        
        input[type="submit"] {
            display: block;
            margin: auto;
        }

        body {
            background: #DDDDDD;
            padding: 10px;
            border: 1px solid grey;
            font-family: Verdana;
            width: fit-content;
            padding: 2%;
            margin: 50px auto auto auto;
            box-shadow: 3px 3px 10px 2px #CCCCCC;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 

    if (
        isset($_POST['nom']) && 
        $_POST['nom'] != "" && 
        isset($_POST['prenom']) && 
        $_POST['prenom'] != "" && 
        isset($_POST['email']) && 
        $_POST['email'] != "" && 
        isset($_POST['emailconfirm']) && 
        $_POST['emailconfirm'] != "" && 
        $_POST['email'] == $_POST['emailconfirm'] &&
        isset($_POST['password']) && 
        $_POST['password'] != "" && 
        isset($_POST['passwordconfirm']) &&
        $_POST['passwordconfirm'] != "" &&
        $_POST['password'] == $_POST['passwordconfirm']
    ) {
        echo 
            "<div style='text-align:left;'>",
            "Nous avons bien reçus les informations suivantes: ",
            "<hr>Genre: ".$_POST['genre'],
            "<br>Nom: ".$_POST['nom'],
            "<br>Prenom: ".$_POST['prenom'],
            "<br>Email: ".$_POST['email'],
            "<br>MDP: ".$_POST['password'],
            "<hr>Merci de votre confiance :monkaW:",
            "</div>";
    }

    else
    {
        // isset($_POST['nom']) ? $nom = $_POST['nom'] : $nom = '';
        // isset($_POST['prenom']) ? $prenom = $_POST['prenom'] : $prenom = '';
        // isset($_POST['email']) ? $email = $_POST['email'] : $email = '';
        // isset($_POST['emailconfirm']) ? $emailconfirm = $_POST['emailconfirm'] : $emailconfirm = '';
        // isset($_POST['password']) ? $password = $_POST['password'] : $password = '';
        // isset($_POST['passwordconfirm']) ? $passwordconfirm = $_POST['passwordconfirm'] : $passwordconfirm = '';
        $postTable = ['nom', 'prenom', 'email', 'emailconfirm', 'password', 'passwordconfirm'];
        foreach ($postTable as $id) {
            isset($_POST[$id]) ? $$id = $_POST[$id] : $$id = '';
        }
    ?>

        <form action="1.php" method="post">

            <label for="genre">Sexe :</label>
            <select name="genre">
                <option value="H" <?php if (@$_POST['genre'] === "H") echo "selected" ?>>Homme</option>
                <option value="F" <?php if (@$_POST['genre'] === "F") echo "selected" ?>>Femme</option>
                <option value="A" <?php if (@$_POST['genre'] === "A") echo "selected" ?>>Autre</option>
            </select>

            <!--
            <p>Nom :<input type="text" name="nom" pattern="[a-z]{2,}$"></p>
            <p>Prénom :<input type="text" name="prenom" pattern="[a-z]{2,}$"></p><hr>

            <p>Email:<input type="email" name="email" pattern="[a-z0-9._%+-]+@+[a-z0-9.-]+.[a-z]{2,}$"></p>
            <p>Email:<input type="email" name="emailconfirm" pattern="[a-z0-9._%+-]+@+[a-z0-9.-]+.[a-z]{2,}$"></p><hr>

            <p>MDP:<input type="password" name="password" pattern=".{8,}$"></p>
            <p>MDP:<input type="password" name="passwordconfirm" pattern=".{8,}$"></p><hr>
            -->

            <p>
                Nom :<br><?php if (isset($_POST['nom']) && $_POST['nom'] == "") echo "/!\\ Veuillez renseigner le champ Nom /!\\<br>"; ?>
                <input type="text" name="nom" value=<?= $nom ?>>
            </p>
            <p>
                Prénom :<br><?php if (isset($_POST['prenom']) && $_POST['prenom'] == "") echo "/!\\ Veuillez renseigner le champ Prénom /!\\<br>"; ?>
                <input type="text" name="prenom" value=<?= $prenom ?>>
            </p>
            <hr>

            <p>
                Email :<br><?php if (isset($_POST['email']) && $_POST['email'] == "") echo "/!\\ Veuillez renseigner le champ Email /!\\<br>"; ?>
                <input type="email" name="email" value=<?= $email ?>>
            </p>
            <p>
                Confirmation Email :<br><?php if (isset($_POST['emailconfirm']) && $_POST['emailconfirm'] == "") echo "/!\\ Veuillez renseigner le champ Confirmation Email /!\\<br>"; ?>
                <input type="email" name="emailconfirm" value=<?= $emailconfirm ?>><br>
                <?php   
                    if (
                        isset($_POST['email']) &&
                        isset($_POST['emailconfirm']) &&
                        $_POST['email'] != "" &&
                        $_POST['emailconfirm'] != "" &&
                        $_POST['email'] != $_POST['emailconfirm']
                    )
                        echo "/!\\ Les champs email ne sont pas identiques /!\\";
                ?>
            </p>
            <hr>
                
            <p>
                MDP :<br><?php if (isset($_POST['password']) && $_POST['password'] == "") echo "/!\\ Veuillez renseigner le champ MDP /!\\<br>"; ?>
                <input type="password" name="password" value=<?= $password ?>>
            </p>
            <p>
                Confirmation MDP :<br><?php if (isset($_POST['passwordconfirm']) && $_POST['passwordconfirm'] == "") echo "/!\\ Veuillez renseigner le champ Confirmation MDP /!\\<br>"; ?>
                <input type="password" name="passwordconfirm" value=<?= $passwordconfirm ?>><br>
                <?php   
                    if (
                        isset($_POST['password']) &&
                        isset($_POST['passwordconfirm']) &&
                        $_POST['password'] != "" &&
                        $_POST['passwordconfirm'] != "" &&
                        $_POST['password'] != $_POST['passwordconfirm']
                    )
                        echo "/!\\ Les champs email ne sont pas identiques /!\\";
                ?>
            </p>
            <hr>

            <input type="submit" value="Confirmer">

        </form>

    <?php 
    } 
    ?>

</body>
</html>