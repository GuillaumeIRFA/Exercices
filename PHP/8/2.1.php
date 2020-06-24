<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 8 - Exercice 2 & 3</title>
    <style>
        td {
            padding: 5px;
        }
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>    
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Adresse</td>
                <td>Ville</td>
                <td>Code postal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $_POST['nom']?></td>
                <td><?= $_POST['prenom']?></td>
                <td><?= $_POST['adresse']?></td>
                <td><?= $_POST['ville']?></td>
                <td><?= $_POST['codepostal']?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>