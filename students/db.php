<?php
    // $db_host = 'localhost';
    // $db_user = 'admin';
    // $db_pw = 'admin';
    // $db_name = 'php-6-20220305';

    // $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫連線錯誤，請洽詢資料庫管理員');

    // // print_r($db);

    // //在php中執行sql語法
    // mysqli_query($db,'SET NAMES utf8mb4');
    // ---------------------------------------------------------------------//


    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20220305';

    $db = new mysqli($db_host,$db_user,$db_pw,$db_name);
    if($db->connect_errno){
        echo $db->connect_error;
    }

    $db->query('SET NAMES utf8mb4');

    date_default_timezone_set('Asia/Taipei');
    $now = date('Y-m-d H:i:s');