<?php

session_start();

if(isset($_POST['cookies']) && !empty($_POST['cookies'])) {
    switch($_POST['cookies']) {
        case "true": $_SESSION['cookies'] = true; break;
        case "false": $_SESSION['cookies'] = false; break;
        default: $_SESSION['cookies'] = false; break;
    }
}

?>
