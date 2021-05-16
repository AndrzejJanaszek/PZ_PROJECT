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
        <label>Nazwa Usługi:<input type="text" name="name"></label>

        <label>Icona {HTML} z googleIcons:<textarea name="icon" cols="30" rows="20"></textarea></label>

        <label>Opis:<textarea name="description" cols="30" rows="20"></textarea></label>

        <input type="hidden" name="form_name" value="service">

        <button>Dodaj/Potwierdź</button>
    </form>

    <a href="../admin_panel.php">Wróć do admin panel</a>
</body>
</html>