<?php
    function index(){
        $sql = 'SELECT * FROM students';
        try {
            $datas = $pdo->query($sql)->fetchAll();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $datas;
    }