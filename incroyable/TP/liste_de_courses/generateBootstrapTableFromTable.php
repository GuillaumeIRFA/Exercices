<?php 

function generateBootstrapTableFromTable($connection, $table, array $fields = null) {

    // generate the query string
    if ($fields) {
        $query = "SELECT * FROM $table WHERE ";
        foreach($fields as $key => $value) {
            $query .= "$key = '$value' AND ";
        }
        $query = substr($query, 0, -4); // Remove the last 'AND '
        echo $query;
        
    } else {
        $query = "SELECT * FROM $table WHERE id_utilisateur = $_SESSION[ID]";
    }

    $tablePrefix = 
    "<table class='table'>
        <thead>
            <tr>"
    ;

    $tableHead = "<th scope='col'>Nom</th>".
    // "<th scope='col'>Modifier</th>".
    "<th scope='col'>Acheté</th>".
    "<th scope='col'>Supprimer</th>";

    $tableMiddleFix =
            "</tr>
        </thead>
        <tbody>"
    ;

    $tableBody = "";    
    
    $tableSuffix = 
        "</tbody>   
    </table>"
    ;
    
    // generate the Body of the table
    if ($result = mysqli_query($connection, $query)) {
    
        while ($line = mysqli_fetch_array($result)) {
            $tableBody .= "<form method='POST' id='form_$line[0]'></form>";
            $tableBody .= $line['acheté'] === "0" ? "<tr>" : "<tr class='bought'>";
            $tableBody .= "<td class='clickable' data-id=$line[0]><div class='innerTD'>".$line['nom']."</div></td>";
            // $tableBody .= "<td><button type='button' class='btn btn-warning modifier' data-id='$line[0]'>Modifier</button></td>";
            $tableBody .= "<td class='w20'><button type='submit' form='form_$line[0]' class='btn btn-".($line['acheté'] === '0' ? "warning" : "success")."' name='toggleEntry' value='$line[0]'>".($line['acheté'] === '0' ? "Non" : "Oui")."</button></td>";
            $tableBody .= "<td class='w20'><button type='submit' form='form_$line[0]' class='btn btn-danger' name='deleteEntry' value='$line[0]'>Supprimer</button></td></tr>";
        }

    } else {
        echo "It broke!";
        return false;
    }

    $bootstrapTable = $tablePrefix.$tableHead.$tableMiddleFix.$tableBody.$tableSuffix;
    return $bootstrapTable;
}

?>