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
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/slider.css">

</head>
<body>
<div class="web">
<!-- menu import -->
<?php
    require_once 'menu.php';
?>
<main>
    <section class="ourteam">
    <div class="slider">
    <button class="slider__btn slider__btn--left"><span class="material-icons-sharp">navigate_before</span></button>
    <button class="slider__btn slider__btn--right"><span class="material-icons-sharp">navigate_next</span></button>
    <?php
    require_once "to_include/teammates.php";
    ?>
    </div>

        <!-- <div class="teammatebox">
            <img src="img/profile.svg" alt="" class="teammatebox__img">
            <div class="teammatebox__description">
                <h3>imie nazwisko</h3>
                <span class="teammatebox__description__stanowisko">stanowisko</span>
                <div class="teammatebox__description__contact">
                    <p class="teammatebox__description__contact__mail">mate@studium.ez</p>
                    <p class="teammatebox__description__contact__phone">+48 666 999 000</p>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita fuga mollitia maxime culpa minus ad quos, dolores eligendi possimus sed? Eius numquam impedit voluptatibus, quae quos non ratione placeat!</p>
            </div>
        </div>
        <div class="teammatebox">
            <img src="img/profile.svg" alt="" class="teammatebox__img">
            <div class="teammatebox__description">
                <h3>imie nazwisko</h3>
                <span class="teammatebox__description__stanowisko">stanowisko</span>
                <div class="teammatebox__description__contact">
                    <p class="teammatebox__description__contact__mail">mate@studium.ez</p>
                    <p class="teammatebox__description__contact__phone">+48 666 999 000</p>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita fuga mollitia maxime culpa minus ad quos, dolores eligendi possimus sed? Eius numquam impedit voluptatibus, quae quos non ratione placeat!</p>
            </div>
        </div>
        <div class="teammatebox">
            <img src="img/profile.svg" alt="" class="teammatebox__img">
            <div class="teammatebox__description">
                <h3>imie nazwisko</h3>
                <span class="teammatebox__description__stanowisko">stanowisko</span>
                <div class="teammatebox__description__contact">
                    <p class="teammatebox__description__contact__mail">mate@studium.ez</p>
                    <p class="teammatebox__description__contact__phone">+48 666 999 000</p>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita fuga mollitia maxime culpa minus ad quos, dolores eligendi possimus sed? Eius numquam impedit voluptatibus, quae quos non ratione placeat!</p>
            </div>
        </div> -->
    </section>

</main>
<!-- footer import -->
<?php
    require_once 'footer.php';
?>

</div>

<script src="js/slider.js"></script>
</body>
</html>