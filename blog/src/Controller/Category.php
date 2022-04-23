<?php
    namespace Gjun\Blog\Controller;

    use Gjun\Blog\Config\DB;

    class Category {
        function index(){
            $sql = 'SELECT * FROM categories ORDER BY id DESC';
            $categories = DB::pdo()->query($sql)->fetchAll();
            return $categories;
        }
        function store($request){
            extract($request);
            $sql = 'INSERT INTO categories(title,slug,created_at)VALUES(?,?,?)';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$title, $slug, DB::now()]);
        }
        function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt = DB::pdo()->prepare($sql);
            $stmt->execute([$id]);

        }
    }