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
        <form name="formulaire" action="2.1.php" enctype="multipart/form-data" method="post">
            
            <p><b>Vos coordonées :</b></p>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" placeholder="Votre nom"><br>

            <label for="nom">Prénom : </label>
            <input type="text" name="prenom" placeholder="Votre prenom"><br>

            <label for="email">Email : </label>
            <input type="email" name="email" placeholder="Votre email"><br>

            <label for="password">Code : </label>
            <input type="paswword" name="password"><br>

            <input type="radio" name="sexe" id="H" value="H">
            <label for="H">Homme</label><br>
            <input type="radio" name="sexe" id="F" value="F">
            <label for="H">Femme</label><br>

            <select name="pays">
                <option value="france">France</option>
                <option value="suisse">Suisse</option>
                <option value="allemagne">Allemagne</option>
                <option value="angleterre">Angleterre</option>
                <option value="algérie">Algérie</option>
            </select><br>

            <p><b>Vos goûts : </b></p>
            <input type="checkbox" name="gouts[]" id="gout1" value="pommes">
            <label for="gout1">Pommes</label><br>
            <input type="checkbox" name="gouts[]" id="gout2" value="poires">
            <label for="gout1">Poires</label><br>
            <input type="checkbox" name="gouts[]" id="gout3" value="scoubidous">
            <label for="gout1">Scoubidous</label><br>
            <textarea name="gouts[]" id="gout0" rows="5" cols="50" placeholder="&#10; Décrivez vos goûts en détail"></textarea>

            <p><b>Envoyez nous votre photo : </b></p>
            <input type="file" name="photo" value="Choisir un fichier"><hr>

            <input type="reset" value="Effacer">
            <input type="submit" value="Envoyer">

        </form>
    </div>
</body>
</html>