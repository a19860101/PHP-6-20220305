<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
    // $sql = "UPDATE students SET 
    //         name        = '$name',
    //         email       = '$email',
    //         edu         = '$edu',
    //         gender      = '$gender',
    //         skill       = '$skill',
    //         content     = '$content',
    //         updated_at  = now()
    //         WHERE id    =$id";
    
    // mysqli_query($db,$sql);


	$sql = 'UPDATE students SET name=?,email=?,edu=?,gender=?,skill=?,content=?,updated_at=? WHERE id = ?';
	$stmt = $db->prepare($sql);
	$stmt->bind_param('sssssssi',$name,$email,$edu,$gender,$skill,$content,$now,$id);
	$stmt->execute();


    echo "<script>alert('學生資料已更新!');</script>";
    header('refresh:0;url=index.php');

