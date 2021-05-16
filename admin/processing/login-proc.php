<?php
    if(isset($_POST["login"]) && isset($_POST["pass"])){

        $content = file_get_contents("../admin_pass.json");
        $json = json_decode($content, true);

        $login = $_POST["login"];
        $password = $_POST["pass"];

        $loginJSON = $json["login"];
        $hashed_passJSON = $json["password"];

        if($login == $loginJSON){
            if(password_verify($password, $hashed_passJSON)){
                session_start();
                $_SESSION["admin"] = true;
                header("Location: ../admin_panel.php");
            }
        }
    }
    else{
        header("Location:../../index.php");
    }

?>