<?php

if(isset($_POST['clic']) && $_POST['clic'] == 'clicked') {

    $monResultat = array(
        'xd' => 'xd',
        'prout' => 'prout'
    );

    sleep(3);

    echo json_encode($monResultat);

}


?>