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
    <link rel="stylesheet" href="css/contact.css">

</head>
<body>
<div class="web">
<!-- menu import -->
<?php
    require_once 'menu.php';
?>
<main>
    <section class="contact_us">
    <div class="form_box">
            <h1>Formularz kontaktowy</h1>
            <h2>Wyślij nam wiadomość na wirtualną szkyrznkę pocztową.</h2>
            <form action="" class="form_box__form">
                <label>email:
                    <input type="email" name="email">
                </label>
                <label>imie:
                    <input type="text" name="name">
                </label>
                <label>nazwisko:
                    <input type="text" name="surname">
                </label>
                <label>wiadomość:
                    <textarea name="message" cols="50" rows="15"></textarea>
                </label>
                <button class="button--style1">Wyślij</button>
            </form>
        </div>
        <!-- <img src="contact_us.svg" alt=""> -->
        <div class="contact_data">
            
            <img src="img/contact_us.svg" alt="">
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