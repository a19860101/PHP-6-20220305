<?php
    include('db.php');
    $sql = 'SELECT * FROM galleries';
    $imgs = $pdo->query($sql)->fetchAll();
    
    if(isset($_POST['del'])){
        extract($_POST);
        $sql = 'DELETE FROM galleries WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        unlink('images/'.$_POST['path']);
        echo "<script>alert('圖片已刪除')</script>";
        header('refresh:0;url=index.php');
    }
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
    <nav>
        <a href="form.php">新增圖片</a>
    </nav>
    <?php
        // $imgs = glob('images/*');
        // print_r($imgs);
        $img_num = count($imgs);
    ?>
    <div>
        目前共有<?php echo $img_num; ?>張圖片
    </div>
    <?php foreach($imgs as $img){ ?>
        <img src="images/<?php echo $img['path'];?>" width="200">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $img['id']; ?>">
            <input type="hidden" name="path" value="<?php echo $img['path']; ?>">
            <input type="submit" value="刪除" name="del">
        </form>
        <hr>
    <?php } ?>
</body>
</html>