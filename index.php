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
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<div class="web">
<!-- menu import -->
<?php
    // var_dump($_SERVER);
    require_once 'menu.php';
    
?>
<main>
    <section class="main__firstview">
        <img src="img/dashboard.svg" alt="dashboard">
        <div class="main__firstview__ball"></div>
        <div class="main__firstview__ball"></div>
        <div class="main__firstview__ball"></div>
        <div class="main__firstview__ball"></div>
        <div class="main__firstview__ball"></div>
        <div class="main__firstview__box">
            <h1>Najlepsze kursy dostępne dla Ciebie już dzis</h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet id magnam suscipit. Aspernatur consectetur quos doloribus, debitis distinctio omnis pariatur. Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
            <button class="button--style1">Zobacz więcej</button>
        </div>
    </section>

</main>
<!-- footer import -->
<?php
    require_once 'footer.php';
?>

</div>
</body>
</html>