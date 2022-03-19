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
    function store($request){
        extract($request);
        $skill = implode(',',$skill);
        $sql = 'INSERT INTO students(name,email,edu,gender,skill,content,created_at,updated_at)VALUES(?,?,?,?,?,?,?,?)';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$name,$email,$edu,$gender,$skill,$content,now(),now()]);
    
    }
    function edit($request){
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
    function update(){}
    function delete($request){
        extract($request);

        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
    }