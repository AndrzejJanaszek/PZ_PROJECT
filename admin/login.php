<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <form action="processing/login-proc.php" method="post">
        <h1>Panel logowania</h1>
        <label>
            login:
            <input type="text" name="login">
        </label>
        <label>
            hasło:
            <input type="password" name="pass">
        </label>
        <button>Zaloguj</button>
    </form>
</body>
</html>