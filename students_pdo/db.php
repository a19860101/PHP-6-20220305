<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20220305';
    $db_charset = 'utf8mb4';

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // data source name

    try {
        $pdo = new PDO($dsn,$db_user,$db_pw);

        //不主動報錯(預設值)
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
        
        //主動報錯
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        
        //主動例外
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

  

    // try {
    //     $sql = 'SELECT * FROM sudents';
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->execute();
    //     $data = $stmt->fetch();
    
    //     print_r($data);
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
