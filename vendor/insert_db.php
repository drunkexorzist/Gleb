<?php
    
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

    if ($password === $password1) {

        $password = md5($password);
        
        mysqli_query($connect, "INSERT INTO `reg` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");

        $_SESSION['message'] = "Регистрация прошла успешно!";
        header("Location: ../auto.php");
    }
    else {
        $_SESSION['message'] = "Что-то пошло не так!";
        header("Location: ../registration.php");
    }
?>