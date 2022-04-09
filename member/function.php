<?php
    include('db.php');
    
    // 註冊會員
    function store($request){
        extract($request);
        $now = now();
        $sql = 'INSERT INTO users(user,pw,email,created_at)VALUES(?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        $pw = sha1(md5($pw));
        $stmt->execute([$user,$pw,$email,$now]);    
    }