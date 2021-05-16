<?php
session_start();
if(!isset($_SESSION["admin"])){
    $mainDir = "http://".$_SERVER["SERVER_NAME"]."/"."CMS_4/";
    // $mainDir = $_SERVER['REQUEST_URI'];
    // echo $_SERVER['REQUEST_URI'];
    // $mainDir = $_SERVER['DOCUMENT_ROOT'];
    header("Location: ".$mainDir);
}
?>