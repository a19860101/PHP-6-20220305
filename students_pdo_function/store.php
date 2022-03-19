<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

    $sql = 'INSERT INTO students(name,email,edu,gender,skill,content,created_at,updated_at)VALUES(?,?,?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$email,$edu,$gender,$skill,$content,$now,$now]);

    // header('location:index.php');
    echo "<script>alert('學生資料已建立!');</script>";
    header('refresh:0;url=index.php');