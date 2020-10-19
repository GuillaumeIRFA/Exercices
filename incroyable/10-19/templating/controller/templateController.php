<?php

function genereUnTemplateToutPret($template, $data)
{

    if ($data === true) {
        ob_start();
        include($template);
        return ob_get_clean();
    }

    if (is_array($data)) {
        extract($data);
        ob_start();
        include($template);
        return ob_get_clean();
    }

    return $data;
}

?>