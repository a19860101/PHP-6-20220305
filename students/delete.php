<?php
    include("db.php");
    extract($_REQUEST);
    // $sql = "DELETE FROM students WHERE id = ".$id;
    // mysqli_query($db,$sql);

    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();


    echo "<script>alert('學生資料已刪除!');</script>";
    header('refresh:0;url=index.php');