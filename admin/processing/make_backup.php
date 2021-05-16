<?php
require_once($_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php");
if(isset($_POST["backup"])){
    $pathbackup="/BACKUPS/";
    $pathdata="/to_include/";

    $dirname = "backup_".date("Y-m-d_H-i");
    
    mkdir("../../BACKUPS/".$dirname);

    $filesToCopy = ["articles.php", "services.php", "teammates.php", "articles.json", "services.json", "teammates.json"];
    $destination = "../../BACKUPS/".$dirname."/";
    foreach($filesToCopy as $file){
        copy("../../to_include/".$file, $destination."$file");
    }

    echo "Zakończono <a href='../admin_panel.php'>Wróć do panelu admina</a> </br> <a href='../../index.php'>Wróć do strony głównej</a>";
}
?>