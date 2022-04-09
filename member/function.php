<?php
    include('db.php');
    
    // 註冊會員
    function store($request){
        extract($request);
        $now = now();
        
        if(checkMail($email) != 0){
            echo "<script>alert('帳號重複');</script>";
            header('refresh:0;url=register.php');
            return ;
        }

        $sql = 'INSERT INTO users(user,pw,email,created_at)VALUES(?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        $pw = sha1(md5($pw));
        $stmt->execute([$user,$pw,$email,$now]);    
    }
    function checkMail($email){
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount() > 0 ? 1 : 0;


    }