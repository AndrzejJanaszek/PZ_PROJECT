<!DOCTYPE html>
<html lang="pl/en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDIUM.EZ</title>

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/blog.css">

</head>
<body>
<div class="web">
<!-- menu import -->
<?php
    require_once 'menu.php';
?>
<main>
    <section class="blog_section">
    <?php
        require_once "./to_include/articles.php";
    ?>
        <!-- <div class="articles_section">
            <article class="blog_article">
                <h2 class="blog_article__header">Tytuł artykułu</h2>
                <p class="blog_article__date">2021-04-11 16:46</p>
                <p class="blog_article__content">Skrót artykułu Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium sectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem sectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem quia itaque quibusdam, repellat consectetur accusamusectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem s tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, impedit?</p>
                <button class="button--style1 blog_article__btn">Zobacz więcej</button>
            </article>
            <article class="blog_article">
                <h2 class="blog_article__header">Tytuł artykułu</h2>
                <p class="blog_article__date">2021-04-11 16:46</p>
                <p class="blog_article__content">Skrót artykułu Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratsectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem sectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem ione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, impedit?</p>
                <button class="button--style1 blog_article__btn">Zobacz więcej</button>
            </article>
            <article class="blog_article">
                <h2 class="blog_article__header">Tytuł artykułu</h2>
                <p class="blog_article__date">2021-04-11 16:46</p>
                <p class="blog_article__content">Skrót artykułu Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratsectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem sectetur adipisicing elit. Optio cumque obcaecati eaque quae in quasi praesentium quia itaque quibusdam, repellat consectetur accusamus tempore ratione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem ione ducimus. Tenetur culpa voluptas laborum! Eum illo iusto tenetur suscipit, id error dolorum consectetur fuga quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, impedit?</p>
                <button class="button--style1 blog_article__btn">Zobacz więcej</button>
            </article>
        </div>
        <div class="articles_list_section">
            <ul class="articles_list">
                <h2>Lista artykułów</h2>
                <li><a href="#">Nazwa artykułu</a></li>
                <li><a href="#">Nazwa artykułu</a></li>
                <li><a href="#">Nazwa artykułu</a></li>
                <li><a href="#">Nazwa artykułu</a></li>
                <li><a href="#">Nazwa artykułu</a></li>
                <li><a href="#">Nazwa artykułu</a></li>
            </ul>
        </div> -->
    </section>
</main>
<!-- footer import -->
<?php
    require_once 'footer.php';
?>

</div>
</body>
</html>