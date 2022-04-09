<?php
    include('db.php');
    
    // 註冊會員
    function store($request){
        execute($request);
        $now = now();
        $sql = 'INSERT INTO users(user,pw,email,created_at)VALUES(?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$user,$pw,$email,$now]);    
    }