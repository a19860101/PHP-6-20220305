<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

	$sql = 'UPDATE students SET name=?,email=?,edu=?,gender=?,skill=?,content=?,updated_at=? WHERE id = ?';
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$name,$email,$edu,$gender,$skill,$content,$now,$id]);


    echo "<script>alert('學生資料已更新!');</script>";
    header('refresh:0;url=index.php');

