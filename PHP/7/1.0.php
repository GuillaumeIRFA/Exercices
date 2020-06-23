<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <fieldset>
        <legend>Infos</legend>
        <form action="1.0.php" method="post">

            <label for="nom" >Nom :</label>
            <input type="text" name="nom" size="40">
            <br>

            <label for="debutant">Débutant</label>
            <input type="radio" name="niveau" value="débutant">
            <label for="initié">Initié</label>
            <input type="radio" name="niveau" value="initié">
            <br>

            <input type="reset" value="Effacer">
            <input type="submit" value="Envoyer">

        </form>
    </fieldset>
    <?= "Bonjour " . @$_POST['nom'] . " vous êtes " . @$_POST['niveau'] . " en PHP."?>
</body>
</html>