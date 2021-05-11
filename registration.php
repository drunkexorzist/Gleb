<?php 
    session_start(); 
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
    <div class="reg">
        <h1>Регистрация</h1>
        <form action="vendor/insert_db.php" method="POST">
            <input type="text" name="login" placeholder="введите логин">
            <br>
            <input type="email" name="email" placeholder="введите email">
            <br>
            <input type="password" name="password" placeholder="введите пароль">
            <br>
            <input type="password" name="password1" placeholder="введите пароль еще раз">
            <br>
            <button>Зарегистрироваться</button>
            <?php
                
                if ($_SESSION['message']) {
                    echo "<p style='text-align: center; font-size: 24px; margin-top:10px;'>",$_SESSION['message'],'</p>';
                }
                unset($_SESSION['message']);

            ?>
        </form>
    </div>
</body>

</html>