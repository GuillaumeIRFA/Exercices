<?php 
    if(isset($_GET['filename'])) {
        $filename = 'upload/'.$_GET['filename'];
        header('Pragma: public');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Cache-Control: private', false);
        header('Content-Type: application/pdf');
        
        header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filename));
        
        readfile($filename);
        
        exit;
    }
?>