<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 8 - Exercice 1</title>
</head>
<body>
    <fieldset>
        <legend>Vos infos</legend>
        <form action="1.1.php" method="POST">
            <label for="nom">Votre nom : <input type="text" name="nom" placeholder="Jean Dupont"></label><br>
            <label for="homme"><input type="radio" name="sexe" id="homme" value="homme">Homme</label><br>
            <label for="femme"><input type="radio" name="sexe" id="femme" value="femme">Femme</label><br>
            <input type="submit" value="Confirmer">
        </form>
    </fieldset>
</body>
</html>