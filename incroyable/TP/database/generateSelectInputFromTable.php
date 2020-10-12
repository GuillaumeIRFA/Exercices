<?php 

function generateSelectInputFromTable($connection, $table, $field_name) {

    $selectInputPrefix = 
    "<div class='form-group'>
        <select class='form-control' name='$field_name'>
        <option selected disabled hidden>-- $field_name --</option>"
    ;

    $selectInputOptions = "";    
    
    $selectInputSuffix = 
        "</select>
    </div>"
    ;
    
    $query = "SELECT $field_name FROM $table";

    $temp = [];
    
    if ($result = mysqli_query($connection, $query)) {
    
        while ($line = mysqli_fetch_array($result)) {
            $temp[] = $line[$field_name];
        }

        // Prevents duplicates
        $temp = array_unique($temp);
        foreach($temp as $element) {
            $selectInputOptions .= "<option>".$element."</option>";
        }

    } else { 
        return false; 
    }

    $selectInput = $selectInputPrefix.$selectInputOptions.$selectInputSuffix;
    return $selectInput;
}

?>