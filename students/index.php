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
    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #999;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <nav>
        <a href="create.php">新增學生資料</a>
    </nav>
    <table>
        <tr>
            <th>序號</th>
            <th>姓名</th>
            <th>Email</th>
            <th>性別</th>
            <th>學歷</th>
            <th>專長</th>
            <th>建立時間</th>
            <th>動作</th>
        </tr>

    <?php foreach($datas as $data){ ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['gender']; ?></td>
            <td><?php echo $data['edu']; ?></td>
            <td><?php echo $data['skill']; ?></td>
            <td><?php echo $data['created_at']; ?></td>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="submit" value="刪除資料">
                </form>
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>