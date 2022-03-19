<?php
    include('db.php');
    function index(){
        $sql = 'SELECT * FROM students';
        try {
            $datas = pdo()->query($sql)->fetchAll();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $datas;
    }
    function show($request){
        extract($request);
        try {
            //預備陳述式
            $sql = 'SELECT * FROM students WHERE id = ?';
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $data;
    }