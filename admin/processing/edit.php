<?php
require_once $_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php";
if($_POST['category'] == "aboutus"){
    $pathToJSON = '../../to_include/teammates.json';
    // $pathToJSON = '../../to_include/teammates.json';
    $json = file_get_contents($pathToJSON);
    $teammates = json_decode($json,true);

    $i=0;
    foreach($teammates as $tmp => $tm){
        if($tm["id"] == $_POST["id"]){
            $tm["name"] = $_POST["name"];
            $tm["surname"] = $_POST["surname"];
            $tm["position"] = $_POST["position"];
            $tm["email"] = $_POST["email"];
            $tm["phone"] = $_POST["phone"];
            $tm["description"] = $_POST["description"];
            $tm["imgName"] = $_POST["imgName"];
            $teammates[$i] = $tm;
            break;
        }
        $i++;
    }
    // TODO: DOKOŃCZYĆ
    file_put_contents($pathToJSON, "");
    file_put_contents($pathToJSON,json_encode($teammates,JSON_HEX_QUOT));

    include_once "../processing/update_html.php";
    $pathToHTML = '../../to_include/teammates.php';
    UpdateAboutUsHTML($pathToJSON,$pathToHTML);
    
}
elseif($_POST['category'] == "blog"){
    $pathToJSON = '../../to_include/articles.json';
    $json = file_get_contents($pathToJSON);
    $articles = json_decode($json,true);

    $i=0;
    foreach($articles as $tmp => $art){
        if($art["id"] == $_POST["id"]){
            $art["title"] = $_POST["title"];
            $art["content"] = $_POST["content"];
            $articles[$i] = $art;
            break;
        }
        $i++;
    }

    file_put_contents($pathToJSON, "");
    file_put_contents($pathToJSON,json_encode($articles,JSON_HEX_QUOT));

    include_once "../processing/update_html.php";
    $pathToHTML = '../../to_include/articles.php';
    UpdateBlogHTML($pathToJSON,$pathToHTML);
}
elseif($_POST['category'] == "offer"){
    $pathToJSON = '../../to_include/services.json';
    $json = file_get_contents($pathToJSON);
    $services = json_decode($json,true);
    
    $i=0;
    foreach($services as $tmp => $ser){
        if($ser["id"] == $_POST["id"]){
            $ser["name"] = $_POST["name"];
            $ser["icon"] = $_POST["icon"];
            $ser["description"] = $_POST["description"];
            $services[$i] = $ser;
        }
        $i++;
    }

    file_put_contents($pathToJSON, "");
    file_put_contents($pathToJSON,json_encode($services,JSON_HEX_QUOT));

    include_once "../processing/update_html.php";
    $pathToHTML = '../../to_include/services.php';
    UpdateOfferHTML($pathToJSON,$pathToHTML);
}


?>