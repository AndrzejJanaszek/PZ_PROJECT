<?php
function UpdateAboutUsHTML($pathToJSON, $pathToHTMLText){

    $json = file_get_contents($pathToJSON);
    // $json = file_get_contents('../../to_include/teammates.json');
    $teammates = json_decode($json, true);

    $newHTML = '';
    foreach($teammates as $tmp => $tm){
        $newHTML .= '
        <div class="teammatebox">
        <img src="img/'.$tm["imgName"].'" alt="" class="teammatebox__img">
        <div class="teammatebox__description">
            <h3>'.$tm["name"].' '.$tm["surname"].'</h3>
            <span class="teammatebox__description__stanowisko">'.$tm["position"].'</span>
            <div class="teammatebox__description__contact">
                <p class="teammatebox__description__contact__mail">e-mail: '.$tm["email"].'</p>
                <p class="teammatebox__description__contact__phone">tel.: '.$tm["phone"].'</p>
            </div>
            <p>'.$tm["description"].'</p>
        </div>
    </div>
    ';
    }
    file_put_contents($pathToHTMLText, $newHTML);
    // file_put_contents("../../to_include/teammates.php", $newHTML);
}
function UpdateOfferHTML($pathToJSON, $pathToHTMLText){
    $json = file_get_contents($pathToJSON);
    // $json = file_get_contents('../../to_include/services.json');
    $services = json_decode($json, true);
    $newHTML = '';
    foreach($services as $tmp => $ser){
        $newHTML .= '
        <div class="offer_box">
            <div class="offer_box__icon">
                '.$ser["icon"].'
            </div>
            <div class="offer_box__content">
                <h2>'.$ser["name"].'</h2>
                <p>'.$ser["description"].'</p>
                <button class="button--style1">Więcej</button>
            </div>
        </div>
    ';
    }
    file_put_contents($pathToHTMLText, $newHTML);
    // file_put_contents("../../to_include/services.php", $newHTML);
}
function UpdateBlogHTML($pathToJSON, $pathToHTMLText){
    $json = file_get_contents($pathToJSON);
    // $json = file_get_contents('../../to_include/articles.json');
    $articles = json_decode($json, true);
    $newHTML = '
    <div class="articles_section">
    ';
    foreach($articles as $tmp => $art){
        $newHTML .= '
        <article class="blog_article">
            <div id="article_'.$art["id"].'" class="internal_link"></div>
            <h2 class="blog_article__header">'.$art["title"].'</h2>
            <p class="blog_article__date">'.$art["date"].'</p>
            <p class="blog_article__content">'.$art["content"].'</p>
            <button class="button--style1 blog_article__btn">Zobacz więcej</button>
        </article>
    ';
    }
    $newHTML .= '
    </div>
    <div class="articles_list_section">
        <ul class="articles_list">
            <h2>Lista artykułów</h2>
    ';
    foreach($articles as $tmp => $art){
        $newHTML .= '
        <li><a href="#article_'.$art["id"].'">'.$art["title"].'</a></li>
    ';
    }
    $newHTML .= '
    </ul>
    </div>
    ';
    file_put_contents($pathToHTMLText, $newHTML);
    // file_put_contents("../../to_include/articles.php", $newHTML);
}
?>