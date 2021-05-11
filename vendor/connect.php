<?php

    $connect = mysqli_connect("127.0.0.1","root","root","gleb_db");

    if (!$connect) {
        echo ("Неудалось подключиться к базе данных");
    }

?>