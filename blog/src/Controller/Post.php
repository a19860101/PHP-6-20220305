<?php
    namespace Gjun\Blog\Controller;
    
    use Gjun\Blog\Config\DB;
    
    class Post {
        function index(){}
        
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