<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
    $sql = "UPDATE students SET 
            name        = '$name',
            email       = '$email',
            edu         = '$edu',
            gender      = '$gender',
            skill       = '$skill',
            content     = '$content',
            updated_at  = now()
            WHERE id    =$id";
    
    mysqli_query($db,$sql);

    echo "<script>alert('學生資料已更新!');</script>";
    header('refresh:0;url=index.php');

