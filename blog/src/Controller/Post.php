<?php
    namespace Gjun\Blog\Controller;
    
    use Gjun\Blog\Config\DB;
    
    class Post {
        function index(){
            $sql = 'SELECT * FROM posts ORDER BY id DESC';
            $posts = DB::pdo()->query($sql)->fetchAll();
            return $posts;
        }
        function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            return $post;
        }
        function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title, content, category_id, user_id, created_at, updated_at)VALUES(?,?,?,?,?,?)';
            try {
                $stmt = DB::pdo()->prepare($sql);
                $stmt->execute([$title, $content, $category_id, 1, DB::now(),DB::now()]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }