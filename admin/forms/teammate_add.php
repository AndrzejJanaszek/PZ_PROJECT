<?php
require_once $_SERVER['DOCUMENT_ROOT']."/CMS_4/to_include/check_admin.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Członka Zespołu</title>
</head>
<body>
    <form action="../processing/add_change.php" method="post">
        <label>Nazwa Zdjęcia (wraz z rozszerzeniem):<input type="text" name="imgName" value="profile.svg"></label>

        <label>Imie:<input type="text" name="name"></label>

        <label>Nazwisko:<input type="text" name="surname"></label>

        <label>Stanowisko:<input type="text" name="position"></label>

        <label>E-mail:<input type="email" name="email"></label>

        <label>Numer telefonu:<input type="number" name="phone"></label>

        <label>Opis:<textarea name="description" cols="30" rows="20"></textarea></label>

        <input type="hidden" name="form_name" value="teammate">

        <button>Dodaj/Potwierdź</button>
    </form>

    <a href="../admin_panel.php">Wróć do admin panel</a>
</body>
</html>