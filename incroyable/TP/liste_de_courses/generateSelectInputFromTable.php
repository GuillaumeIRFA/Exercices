<?php 

function generateSelectInputFromTable($connection, $table, $field_name) {

    $selectInputPrefix = 
    "<select class='form-control' name='addUser-$field_name'>
        <option selected disabled hidden>-- $field_name --</option>"
    ;

    $selectInputOptions = "";    
    
    $selectInputSuffix = 
        "</select>"
    ;
    
    $query = "SELECT DISTINCT $field_name FROM $table";

    // $temp = [];
    
    if ($result = mysqli_query($connection, $query)) {
    
        while ($line = mysqli_fetch_array($result)) {
            $line[$field_name] != '' ? $selectInputOptions .= "<option>".$line[$field_name]."</option>" : null;
            // $temp[] = $line[$field_name];
        }

        // Prevents duplicates
        // $temp = array_unique($temp);
        // foreach($temp as $element) {
        //     $selectInputOptions .= "<option>".$element."</option>";
        // }

    } else { 
        return false; 
    }

    $selectInput = $selectInputPrefix.$selectInputOptions.$selectInputSuffix;
    return $selectInput;
}

?>