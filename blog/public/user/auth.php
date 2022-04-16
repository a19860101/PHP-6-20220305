<?php
    include('../../vendor/autoload.php');

    use Gjun\Blog\Controller\User;

    $auth = User::auth($_REQUEST);

    switch($auth){
        case 0:
            echo '<script>alert("登入成功!")</script>';
            header('refresh:0;url=../index.php');
        break;
        case 1:
            echo '<script>alert("帳號或密碼錯誤!")</script>';
            header('refresh:0;url=login.php');
        break;
        case 2:
            echo '<script>alert("Email不存在，請重新輸入或註冊!")</script>';
            header('refresh:0;url=../index.php');
        break;
    }
    