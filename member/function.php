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

        $sql = 'INSERT INTO users(name,pw,email,created_at)VALUES(?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        // $pw = sha1(md5($pw));
        $pw = password_hash($pw,PASSWORD_DEFAULT);
        $stmt->execute([$name,$pw,$email,$now]);    
    }
    function checkMail($email){
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount() > 0 ? 1 : 0;


    }
    function auth($request){
        session_start();
        extract($request);
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);
        
        $user = $stmt->fetch();

        if(!$user){
            echo '<script>alert("Email不存在，請重新輸入或註冊!")</script>';
            header('refresh:0;url=index.php');
            return;
        }
        // if($user['pw'] == sha1(md5($pw))){
        //     $_SESSION['AUTH'] = $user;
        //     echo '<script>alert("登入成功!")</script>';
        //     header('refresh:0;url=index.php');
        // }
        if(password_verify($pw,$user['pw'])){
            $_SESSION['AUTH'] = $user;
            echo '<script>alert("登入成功!")</script>';
            header('refresh:0;url=index.php');
        }else{
            echo '<script>alert("帳號或密碼錯誤!")</script>';
            header('refresh:0;url=login.php');
        }
    }