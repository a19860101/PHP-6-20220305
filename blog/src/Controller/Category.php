<?php
    namespace Gjun\Blog\Controller;

    use Gjun\Blog\Config\DB;

    class Category {
        function index(){
            $sql = 'SELECT * FROM categories ORDER BY id DESC';
            $categories = DB::pdo()->query($sql)->fetchAll();
            return $categories;
        }
    }