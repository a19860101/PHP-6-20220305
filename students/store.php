<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
    // $sql = "INSERT INTO students(name,email,edu,gender,skill,content,created_at,updated_at)VALUES('$name','$email','$edu','$gender','$skill','$content',now(),now())";
    
    // mysqli_query($db,$sql);

    // date_default_timezone_set('Asia/Taipei');
    // $now = date('Y-m-d H:i:s');

    $sql = 'INSERT INTO students(name,email,edu,gender,skill,content,created_at,updated_at)VALUES(?,?,?,?,?,?,?,?)';
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssssssss',$name,$email,$edu,$gender,$skill,$content,$now,$now);
    $stmt->execute();



    // header('location:index.php');
    echo "<script>alert('學生資料已建立!');</script>";
    header('refresh:0;url=index.php');