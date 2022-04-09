<?php
    namespace Gjun\Blog\Controller;

    use Gjun\Blog\Config\DB;

    class Student {
        function index(){
            $sql = 'SELECT * FROM students';
            try {
                $datas = DB::pdo()->query($sql)->fetchAll();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            return $datas;
        }
    }