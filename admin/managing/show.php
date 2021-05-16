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
        if($_POST['category'] == "aboutus"){
            $json = file_get_contents('../../to_include/teammates.json');
            $teammates = json_decode($json,true);

            $HTML = '';
            foreach($teammates as $tmp => $rekord){
                $HTML .= '
                <div class="teammatebox">
                    <img src="img/'.$rekord["imgName"].'" alt="" class="teammatebox__img">
                    <div class="teammatebox__description">
                        <h3>'.$rekord["name"].' '.$rekord["surname"].'</h3>
                        <span class="teammatebox__description__stanowisko">'.$rekord["position"].'</span>
                        <div class="teammatebox__description__contact">
                            <p class="teammatebox__description__contact__mail">'.$rekord["email"].'</p>
                            <p class="teammatebox__description__contact__phone">'.$rekord["phone"].'</p>
                        </div>
                        <p>'.$rekord["description"].'</p>
                    </div>
                    <form action="edit_delete.php" method="post">
                        <input type="hidden" value="'.$rekord["id"].'" name="id">
                        <input type="hidden" value="aboutus" name="category">
                        <button class="managing_btn managing_btn--edit" name="edit" value="true">Edytuj</button>
                        <button class="managing_btn managing_btn--delete" name="delete" value="true">Usuń</button>
                    </form>
                </div>
                ';
            }
            echo $HTML;
            
        }
        elseif($_POST['category'] == "blog"){
            $json = file_get_contents('../../to_include/articles.json');
            $articles = json_decode($json,true);

            $HTML = '
            <div class="articles_section">
            ';
            foreach($articles as $tmp => $art){
                $HTML .= '
                <article class="blog_article">
                    <div id="article_'.$art["id"].'" class="internal_link"></div>
                    <h2 class="blog_article__header">'.$art["title"].'</h2>
                    <p class="blog_article__date">'.$art["date"].'</p>
                    <p class="blog_article__content">'.$art["content"].'</p>
                    <form action="edit_delete.php" method="post">
                        <input type="hidden" value="'.$art["id"].'" name="id">
                        <input type="hidden" value="blog" name="category">
                        <button class="managing_btn managing_btn--edit" name="edit" value="true">Edytuj</button>
                        <button class="managing_btn managing_btn--delete" name="delete" value="true">Usuń</button>
                    </form>
                </article>
            ';
            }
            $HTML .= '
            </div>
            <div class="articles_list_section">
                <ul class="articles_list">
                    <h2>Lista artykułów</h2>
            ';
            foreach($articles as $tmp => $art){
                $HTML .= '
                <li><a href="#article_'.$art["id"].'">'.$art["title"].'</a></li>
            ';
            }
            $HTML .= '
            </ul>
            </div>
            ';
            echo $HTML;
        }
        elseif($_POST['category'] == "offer"){
            $json = file_get_contents('../../to_include/services.json');
            $services = json_decode($json,true);

            $HTML = '';
            foreach($services as $tmp => $ser){
                $HTML .= '
                <div class="offer_box">
                    <div class="offer_box__icon">
                        '.$ser["icon"].'
                    </div>
                    <div class="offer_box__content">
                        <h2>'.$ser["name"].'</h2>
                        <p>'.$ser["description"].'</p>
                    </div>
                    <form action="edit_delete.php" method="post">
                        <input type="hidden" value="'.$ser["id"].'" name="id">
                        <input type="hidden" value="offer" name="category">
                        <button class="managing_btn managing_btn--edit" name="edit" value="true">Edytuj</button>
                        <button class="managing_btn managing_btn--delete" name="delete" value="true">Usuń</button>
                    </form>
                </div>
            ';
            }
            echo $HTML;
        }
    ?>
</body>
</html>