<?php
    namespace Gjun\Blog\Controller;
    
    use Gjun\Blog\Config\DB;
    use Gjun\Blog\Controller\File;
    
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
        function store($request,$cover){
            extract($request);
            $sql = 'INSERT INTO posts(title,cover, content, category_id, user_id, created_at, updated_at)VALUES(?,?,?,?,?,?,?)';
            try {
                $stmt = DB::pdo()->prepare($sql);
                $stmt->execute([$title,$cover , $content, $category_id, 1, DB::now(),DB::now()]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
        }
        function edit($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            return $post;
        }
        function update($request,$cover){
            extract($request);
            $sql = 'UPDATE posts SET title=?,cover=?,content=?,category_id=?,updated_at=? WHERE id=?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title,$cover, $content, $category_id, DB::now(),$id]);
        }
        function deleteCover($id){
            $sql = 'UPDATE posts SET cover=? WHERE id=?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([null,$id]);
        
        }
    }