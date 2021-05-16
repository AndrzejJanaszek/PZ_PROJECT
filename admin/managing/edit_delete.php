<?php
require_once $_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel...</title>
</head>
<body>
    <?php
        if($_POST["edit"] == "true"){
            if($_POST['category'] == "aboutus"){
                $json = file_get_contents('../../to_include/teammates.json');
                $teammates = json_decode($json,true);
    
                $rekord;
                foreach($teammates as $tmp => $curRek){
                    if($curRek["id"] == $_POST["id"]){
                        $rekord = $curRek;
                    }
                }
                $HTML = '
                <form action="../processing/edit.php" method="post">
                    <label>Nazwa Zdjęcia (wraz z rozszerzeniem):<input type="text" name="imgName" value="'.$rekord["imgName"].'"></label>

                    <label>Imie:<input type="text" name="name" value="'.$rekord["name"].'"></label>

                    <label>Nazwisko:<input type="text" name="surname" value="'.$rekord["surname"].'"></label>

                    <label>Stanowisko:<input type="text" name="position" value="'.$rekord["position"].'"></label>

                    <label>E-mail:<input type="email" name="email" value="'.$rekord["email"].'"></label>

                    <label>Numer telefonu:<input type="number" name="phone" value="'.$rekord["phone"].'"></label>

                    <label>Opis:<textarea name="description" cols="30" rows="20">'.$rekord["description"].'</textarea></label>

                    <input type="hidden" name="category" value="aboutus">
                    <input type="hidden" name="id" value="'.$rekord["id"].'">

                    <button>Potwierdź zmiany</button>
                </form>
                ';
                echo $HTML;
                
            }
            elseif($_POST['category'] == "blog"){
                $json = file_get_contents('../../to_include/articles.json');
                $articles = json_decode($json,true);
    
                $art;
                foreach($articles as $tmp => $curArt){
                    if($curArt["id"] == $_POST["id"]){
                        $art = $curArt;
                    }
                }
                $HTML = '
                <form action="../processing/edit.php" method="post">
                    <label>Tytuł Artykułu:<input type="text" name="title" value="'.$art["title"].'"></label>

                    <label>Treść:<textarea name="content" cols="60" rows="30">'.$art["content"].'</textarea></label>

                    <input type="hidden" name="category" value="blog">
                    <input type="hidden" name="id" value="'.$art["id"].'">

                    <button>Potwierdź zmiany</button>

                </form>
                ';
                echo $HTML;
            }
            elseif($_POST['category'] == "offer"){
                var_dump($_POST);
                $json = file_get_contents('../../to_include/services.json');
                $services = json_decode($json,true);
    
                $ser;
                foreach($services as $tmp => $curSer){
                    if($curSer["id"] == $_POST["id"]){
                        $ser = $curSer;
                    }
                }

                var_dump($ser);
                $HTML = '
                <form action="../processing/edit.php" method="post">
                    <label>Nazwa Usługi:<input type="text" name="name" value="'.$ser["name"].'"></label>

                    <label>Icona {HTML} z googleIcons:<textarea name="icon" cols="30" rows="20">'.$ser["icon"].'</textarea></label>
            
                    <label>Opis:<textarea name="description" cols="30" rows="20">'.$ser["description"].'</textarea></label>
                    <input type="hidden" name="category" value="offer">
                    <input type="hidden" name="id" value="'.$ser["id"].'">

                    <button>Potwierdź zmiany</button>

                </form>
                ';
                echo $HTML;
            }
        }elseif($_POST["delete"] == "true"){
            if($_POST['category'] == "aboutus"){
                $json = file_get_contents('../../to_include/teammates.json');
                $teammates = json_decode($json,true);

                $exportArr = [];
                foreach($teammates as $tmp => $curRek){
                    if($curRek["id"] != $_POST["id"]){
                        array_push($exportArr, $curRek);
                    }
                }
                file_put_contents('../../to_include/teammates.json', json_encode($exportArr));
                include_once "../processing/update_html.php";
                UpdateAboutUsHTML('../../to_include/teammates.json', '../../to_include/teammates.php');
            }
            elseif($_POST['category'] == "blog"){
                $json = file_get_contents('../../to_include/articles.json');
                $articles = json_decode($json,true);
    
                $exportArr = [];
                foreach($articles as $tmp => $curRek){
                    if($curRek["id"] != $_POST["id"]){
                        array_push($exportArr, $curRek);
                    }
                }
                file_put_contents('../../to_include/articles.json', json_encode($exportArr));
                include_once "../processing/update_html.php";
                UpdateBlogHTML('../../to_include/articles.json', '../../to_include/articles.php');
            }
            elseif($_POST['category'] == "offer"){
                $json = file_get_contents('../../to_include/services.json');
                $services = json_decode($json,true);
    
                $exportArr = [];
                foreach($services as $tmp => $curRek){
                    if($curRek["id"] != $_POST["id"]){
                        array_push($exportArr, $curRek);
                    }
                }
                file_put_contents('../../to_include/services.json', json_encode($exportArr));
                include_once "../processing/update_html.php";
                UpdateOfferHTML('../../to_include/services.json', '../../to_include/services.php');
            }
        }
        else{
            echo 'Błąd <a href="../../index.php">Wróc do strony głównej</a>';
        }
    ?>
</body>
</html>