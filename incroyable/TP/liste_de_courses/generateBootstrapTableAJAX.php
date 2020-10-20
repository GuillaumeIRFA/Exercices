<?php 

session_start();

require_once "authentication.php";
if(isset($_SESSION['ID'])) {

    if($response = mysqli_query($connection, "SELECT * FROM articles WHERE id_utilisateur = $_SESSION[ID]")) {
        $data = [];
        while($line = mysqli_fetch_array($response)){
            $data[] = $line;
        }
    }
    
    if(count($data) > 0) {
        echo "<table class='table'><thead><tr>";
        echo "<th scope='col'>Nom</th>"."<th scope='col'>Acheté</th>"."<th scope='col'>Supprimer</th>";
        echo "</tr></thead><tbody>";
        foreach($data as $element) {
            echo "<form method='POST' id='form_$element[0]'></form>";
            echo $element['acheté'] === "0" ? "<tr>" : "<tr class='bought'>";
            echo "<td class='clickable' data-id=$element[0]><div class='innerTD'>".$element['nom']."</div></td>";
            echo "<td class='w20'><button type='submit' form='form_$element[0]' class='btn btn-".($element['acheté'] === '0' ? "warning" : "success")."' name='toggleEntry' value='$element[0]'>".($element['acheté'] === '0' ? "Non" : "Oui")."</button></td>";
            echo "<td class='w20'><button type='submit' form='form_$element[0]' class='btn btn-danger' name='deleteEntry' value='$element[0]'>Supprimer</button></td></tr>";
        }
        echo "</tbody></table>";
    
    } else {
        echo "Vous n'avez encore aucun article dans votre liste de courses!";
    }
}

?>