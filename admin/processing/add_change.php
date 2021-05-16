<?php
require_once $_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php";
use function PHPSTORM_META\type;

if($_POST['form_name'] == "teammate"){
        if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['position']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['description']) && isset($_POST['imgName'])){
            $pathToJSON = '../../to_include/teammates.json';
            $pathToHTML = '../../to_include/teammates.php';
            $json = file_get_contents($pathToJSON);
            $teammates = json_decode($json, true);

            $newID;
            if($teammates == NULL){
                $teammates = [];
                $newID = 1;
            }
            else{
                $newID = end($teammates)["id"]+1;
            }
            
            $newTeammate = array("id"=>"${newID}", "name"=>"${_POST["name"]}","surname"=>"${_POST["surname"]}","position"=>"${_POST["position"]}","email"=>"${_POST["email"]}","phone"=>"${_POST["phone"]}","description"=>"${_POST["description"]}","imgName"=>"${_POST["imgName"]}");

            array_push($teammates, $newTeammate);
            
            file_put_contents($pathToJSON, "");
            file_put_contents($pathToJSON, json_encode($teammates), JSON_HEX_QUOT);

            // TODO: WYWOAŁANIE PROGRAMU KTÓRY ZAKTUALIZUJE TREŚĆ teammates.php O NOWEGO UŻYTKOWNIKA

            require_once "./update_html.php";
            UpdateAboutUsHTML($pathToJSON, $pathToHTML);
        }
    }
    elseif($_POST['form_name'] == "service"){
        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['icon'])){
            $pathToJSON = '../../to_include/services.json';
            $pathToHTML = '../../to_include/services.php';
            $json = file_get_contents($pathToJSON);
            $services = json_decode($json, true);

            $newID;
            if($services == NULL){
                $services = [];
            }
            else{
                $newID = end($services)["id"]+1;
            }
            
            $newService = array("id"=>"${newID}", "name"=>"${_POST["name"]}","description"=>"${_POST["description"]}","icon"=>"${_POST["icon"]}");

            array_push($services, $newService);
            file_put_contents($pathToJSON, "");
            file_put_contents($pathToJSON, json_encode($services), JSON_HEX_QUOT);

            // TODO: WYWOAŁANIE PROGRAMU KTÓRY ZAKTUALIZUJE TREŚĆ teammates.php O NOWEGO UŻYTKOWNIKA
            require_once "./update_html.php";
            UpdateOfferHTML($pathToJSON, $pathToHTML);
        }
    }
    elseif($_POST['form_name'] == "article"){
        if(isset($_POST['title']) && isset($_POST['content'])){
            $pathToJSON = '../../to_include/articles.json';
            $pathToHTML = '../../to_include/articles.php';
            $json = file_get_contents($pathToJSON);
            $articles = json_decode($json, true);

            $newID;
            if($articles == NULL){
                $articles = [];
            }
            else{
                $newID = end($articles)["id"]+1;
            }

            $currentDate = date("Y-m-d H:i");
            $newArticle = array("id"=>"${newID}", "title"=>"${_POST["title"]}","date"=>"${currentDate}","content"=>"${_POST["content"]}");

            array_push($articles, $newArticle);
            file_put_contents($pathToJSON, "");
            file_put_contents($pathToJSON, json_encode($articles), JSON_HEX_QUOT);

            // TODO: WYWOAŁANIE PROGRAMU KTÓRY ZAKTUALIZUJE TREŚĆ teammates.php O NOWEGO UŻYTKOWNIKA
            require_once "./update_html.php";
            UpdateBlogHTML($pathToJSON, $pathToHTML);
        }
    }
?>