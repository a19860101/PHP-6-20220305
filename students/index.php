<?php
    include('db.php');
    $sql = 'SELECT * FROM students';
    $result = mysqli_query($db, $sql);
    // 取單筆資料
    // $data = mysqli_fetch_assoc($result);
    // 取所有資料
    $datas = mysqli_fetch_all($result,MYSQLI_ASSOC);

    // print_r($datas);
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
    <?php
        foreach($datas as $data){
            echo '<div>'.$data['name'].'</div>';
            echo '<div>'.$data['email'].'</div>';
            echo '<div>'.$data['gender'].'</div>';
            echo '<div>'.$data['skill'].'</div>';
            echo '<hr>';
        }
    ?>
</body>
</html>