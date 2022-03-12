<?php
    include('db.php');
    extract($_REQUEST);
    $sql = 'SELECT * FROM students WHERE id = '.$id;
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $data['name']; ?> 詳細資料</h2>
    <ul>
        <li>Email:<?php echo $data['email']; ?> </li>
        <li>性別:<?php echo $data['gender']; ?> </li>
        <li>學歷:<?php echo $data['edu']; ?> </li>
        <li>專長:<?php echo $data['skill']; ?> </li>
        <li>備註:<?php echo $data['content']; ?> </li>
        <li>資料建立時間:<?php echo $data['created_at']; ?> </li>
        <li>最後更新時間:<?php echo $data['updated_at']; ?> </li>
    </ul>
    <a href="index.php">學生列表</a>
    <a href="edit.php?id=<?php echo $data['id']; ?>">編輯資料</a>
</body>
</html>