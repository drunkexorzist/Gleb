<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
    <h1>Профиль</h1>
    <form>
        <p><?=$_SESSION['user']['login']?></p>
        <p><?=$_SESSION['user']['email']?></p>
    </form>
</body>
</html>