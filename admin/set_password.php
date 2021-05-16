<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>
        podaj hasło:
            <input type="text" name="password">

            <button>Konwertuj</button>
        </label>
    </form>

    <?php 
    if(isset($_POST["password"])){
        echo password_hash($_POST["password"], PASSWORD_DEFAULT);
    }
    ?>
</body>
</html>