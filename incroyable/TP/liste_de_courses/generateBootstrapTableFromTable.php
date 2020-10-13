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
        $query = "SELECT * FROM $table";
    }

    $tablePrefix = 
    "<table class='table'>
        <thead>
            <tr>"
    ;

    $tableHead = "<th scope='col'>Nom</th>"."<th scope='col'>Acheté</th>"."<th scope='col'>Supprimer</th>";

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
            $tableBody .= $line['acheté'] === "0" ? "<tr>" : "<tr class='bought'>";
            $tableBody .= "<td>".$line['nom']."</td>";
            $tableBody .= "<td><form method='POST'><button type='submit' class='btn btn-".($line['acheté'] === '0' ? "warning" : "success")."' name='toggleEntry' value='$line[0]'>".($line['acheté'] === '0' ? "Non" : "Oui")."</button></form></td>";
            $tableBody .= "<td><form method='POST'><button type='submit' class='btn btn-danger' name='deleteEntry' value='$line[0]'>Supprimer</button></form></td></tr>";
        }

    } else {
        echo "It broke!";
        return false;
    }

    $bootstrapTable = $tablePrefix.$tableHead.$tableMiddleFix.$tableBody.$tableSuffix;
    return $bootstrapTable;
}

?>