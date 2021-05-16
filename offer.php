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
    <link rel="stylesheet" href="css/offer.css">

</head>
<body>
<div class="web">
<!-- menu import -->
<?php
    require_once 'menu.php';
?>
<main>
    <section class="offer_section">
    <?php
    require_once "./to_include/services.php";
    ?>
        <!-- <div class="offer_box">
            <div class="offer_box__icon">
                <span class="material-icons-outlined">language</span>
            </div>
            <div class="offer_box__content">
                <h2>Nazwa Usługi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat animi excepturi explicabo dolorum atque quis officia commodi. Neque quam sapiente fugiat quaerat nihil expedita obcaecati veritatis, non magni excepturi deleniti. Lorem ipsum dolor sit amet</p>
                <button class="button--style1">Więcej</button>
            </div>
        </div>
        <div class="offer_box">
            <div class="offer_box__icon">
            <span class="material-icons-outlined">miscellaneous_services</span>
            </div>
            <div class="offer_box__content">
                <h2>Nazwa Usługi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat animi excepturi explicabo dolorum atque quis officia commodi. Neque quam sapiente fugiat quaerat nihil expedita obcaecati veritatis, non magni excepturi deleniti. Lorem ipsum dolor sit amet</p>
                <button class="button--style1">Więcej</button>
            </div>
        </div>
        <div class="offer_box">
            <div class="offer_box__icon">
            <span class="material-icons">design_services</span>
            </div>
            <div class="offer_box__content">
                <h2>Nazwa Usługi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat animi excepturi explicabo dolorum atque quis officia commodi. Neque quam sapiente fugiat quaerat nihil expedita obcaecati veritatis, non magni excepturi deleniti. Lorem ipsum dolor sit amet</p>
                <button class="button--style1">Więcej</button>
            </div>
        </div> -->
    </section>

    <!-- 
        <span class="material-icons-outlined">language</span>

        <span class="material-icons-outlined">miscellaneous_services</span>

        <span class="material-icons">design_services</span>
     -->
</main>
<!-- footer import -->
<?php
    require_once 'footer.php';
?>

</div>
</body>
</html>