<?php
    namespace Gjun\Blog\Controller;

    use Gjun\Blog\Config\DB;

    class User {
        function store($request){
            extract($request);
            
            if(User::checkMail($email) != 0){
                echo "<script>alert('帳號重複');</script>";
                header('refresh:0;url=register.php');
                return ;
            }

            $sql = 'INSERT INTO users(name,pw,email,created_at)VALUES(?,?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $pw = password_hash($pw,PASSWORD_DEFAULT);
            $stmt->execute([$name,$pw,$email,DB::now()]);
        }
        function checkMail($email){
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$email]);
    
            return $stmt->rowCount() > 0 ? 1 : 0;
    
    
        }
        function auth($request){
            session_start();
            extract($request);
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$email]);
            
            $user = $stmt->fetch();
    
            if(!$user){
               
                return 2;
            }
            if(password_verify($pw,$user['pw'])){
                $_SESSION['AUTH'] = $user;
                return 0;
                // echo '<script>alert("登入成功!")</script>';
                // header('refresh:0;url=index.php');
            }else{
                return 1;
                // echo '<script>alert("帳號或密碼錯誤!")</script>';
                // header('refresh:0;url=login.php');
            }
        }
    }