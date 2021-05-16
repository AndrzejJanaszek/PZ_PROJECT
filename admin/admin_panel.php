<?php
// echo $_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php";
require_once($_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="../css/colors.css"> -->
    <link rel="stylesheet" href="css/admin_panel.css">
</head>
<body>

    <section class="admin_section">
    <form action="./managing/show.php" method="post">
        <div class="category">
            <div class="category__name">O nas - Członkowie Zespołu</div>
            <div class="category__options">
                <button class="category__options__btn" name="category" value="aboutus">Edytuj/Usuń</button>
                <a href="./forms/teammate_add.php" class="category__options__btn">Dodaj</a>
                <button class="category__options__btn">Zaktualizuj (funkcjonalność nie dodana)</button>
            </div>
        </div>
        <div class="category">
            <div class="category__name">Blog - Artykuły</div>
            <div class="category__options">
                <button class="category__options__btn" name="category" value="blog">Edytuj/Usuń</button>
                <a href="./forms/article_add.php" class="category__options__btn">Dodaj</a>
                <button class="category__options__btn">Zaktualizuj (funkcjonalność nie dodana)</button>
            </div>
        </div>
        <div class="category">
            <div class="category__name">Oferta - Usługi</div>
            <div class="category__options">
                <button class="category__options__btn" name="category" value="offer">Edytuj/Usuń</button>
                <a href="./forms/service_add.php" class="category__options__btn">Dodaj</a>
                <button class="category__options__btn">Zaktualizuj (funkcjonalność nie dodana)</button>
            </div>
        </div>
    </form>
    <br><br>
    <form action="./processing/make_backup.php" method="post">
        <label>Zrób całościowy BACKUP:
            <button name="backup">Zrób backup</button>
        </label>
    </form>
    <br><br><a href="./logout.php">Wyloguj</a>
    <div class="backup_list">
        <?php
        
        echo '<ul>
        <h2>Lista backupów:</h2>
        ';
            foreach(scandir("../BACKUPS/") as $bu){
                if($bu != "." && $bu != '..'){
                    echo '<li>'.$bu.'</li>';
                }
            }
        echo '</ul>';
        ?>
    </div>
    </section>

<?php
// include "./processing/update_html.php";
// UpdateAboutUsHTML('../to_include/teammates.json','../to_include/teammates.php');
?>





    <!-- o nas --- blog --- oferta

    o nas-
    dodawanie, usuwanie i edycja członków teamu

    blog-
    dodawanie, usuwanie i edycja artykułów

    oferta- 
    dodawanie, usuwanie i edycja usług

    ------------------------------------------------------

    teammates:
    Imie nazwisko
    stanowisko
    kontakt
    opis

    article:
    title
    date
    content

    services:
    name
    description
    icon -->

<script src="./js/admin_panel.js"></script>
</body>
</html>