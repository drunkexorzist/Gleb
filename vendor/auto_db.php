<?php

    session_start();
    require_once "connect.php";

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `reg` WHERE `login`='$login' AND `password` = '$password'");

?>