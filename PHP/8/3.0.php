<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 8 - Exercice 3</title>
</head>
<body>
    <fieldset>
        <legend><h3>Adresse client</h3></legend>
        <form action="2.1.php" method="POST" id="formulaire">
            <label for="nom">Nom : <input type="text" name="nom" placeholder="Dupont" value=""></label><br>
            <label for="prenom">Prénom : <input type="text" name="prenom" placeholder="Jean" value=""></label><br>
            <label for="adresse">Adresse : <input type="text" name="adresse" placeholder="3 rue Cactus" value=""></label><br>
            <label for="ville">Ville : <input type="text" name="ville" placeholder="Mulhouse" value=""></label><br>
            <label for="codepostal">Code postal : <input type="text" name="codepostal" placeholder="68100" value=""></label><br>
            <input type="submit" value="Confirmer" onclick="isValid(); return false;">
        </form>
    </fieldset>
    <script>     
        function isValid() {
            let compteur = 0;
            let elements = document.querySelectorAll("#formulaire input[type=text][value='']");
            for (let i = 0, element; element = elements[i]; i++) {
                if (element.value === "") compteur++;
            }
            if (compteur > 0) {
                alert ("Veuillez remplir tous les champs.");
                return false;
            }
            else document.getElementById("formulaire").submit();
        }
    </script>
</body>
</html>