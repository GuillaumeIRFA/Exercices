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
    "<table class='table table-striped table-dark'>
        <thead>
            <tr>"
    ;

    $tableHead = "";

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

    // generate the Header of the table
    if ($result = mysqli_query($connection, "SELECT * FROM $table")) {
    
        $headerFields = [];
        $headerline = mysqli_fetch_array($result);
        $keys = array_keys($headerline);

        for($i = 1; $i < count($keys); $i+=2) {
            $tableHead .= "<th scope='col'>$keys[$i]</th>";
            $headerFields[] = $keys[$i];
        }

    } else {
        echo "It broke!";
        return false;
    }
    
    // generate the Body of the table
    if ($result = mysqli_query($connection, $query)) {
    
        while ($line = mysqli_fetch_array($result)) {
            $tableBody .= "<tr>";
            for($i = 0; $i < count($headerFields); $i++){
                $tableBody .= "<td>".$line[$headerFields[$i]]."</td>";
            }
            $tableBody .= "</tr>";
        }

    } else {
        echo "It broke!";
        return false;
    }

    $table = $tablePrefix.$tableHead.$tableMiddleFix.$tableBody.$tableSuffix;
    return $table;
}

?>
