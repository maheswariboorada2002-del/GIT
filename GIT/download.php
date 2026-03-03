<?php
 if(isset ($_GET['file'])){
    $filepath="uploads/" .$_GET['file'];

    
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
           
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } 
    else {
        echo "File not found.";
    }
 }
?>