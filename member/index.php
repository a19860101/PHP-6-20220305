<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('template/nav.php'); ?>
    <h1>首頁</h1>
    <?php
        if(isset($_SESSION['AUTH'])){
            echo $_SESSION['AUTH']['email'];
        }else{
            echo '訪客';
        }
    ?>
</body>
</html>