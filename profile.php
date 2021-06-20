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
    <style>
        .P1{
            text-align: center;
            font-size: 24px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Профиль</h1>
    <form class="P1">
        <span>Login:  </span><span><?=$_SESSION['user']['login']?></span>
        <br>
        <span>Email:  </span><span><?=$_SESSION['user']['email']?></span>
    </form>
</body>
</html>