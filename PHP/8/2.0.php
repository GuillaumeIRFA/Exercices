<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 8 - Exercice 2</title>
</head>
<body>
    <fieldset>
        <legend><h3>Adresse client</h3></legend>
        <form action="2.1.php" method="POST">
            <label for="nom">Nom : <input type="text" name="nom" placeholder="Dupont"></label><br>
            <label for="prenom">Prénom : <input type="text" name="prenom" placeholder="Jean"></label><br>
            <label for="adresse">Adresse : <input type="text" name="adresse" placeholder="3 rue Cactus"></label><br>
            <label for="ville">Ville : <input type="text" name="ville" placeholder="Mulhouse"></label><br>
            <label for="codepostal">Code postal : <input type="text" name="codepostal" placeholder="68100"></label><br>
            <input type="submit" value="Confirmer">
        </form>
    </fieldset>
</body>
</html>