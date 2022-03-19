<?php

    if(isset($_POST['del'])){
        // echo $_POST['img'];
        unlink($_POST['img']);
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
        $imgs = glob('images/*');
        // print_r($imgs);
        $img_num = count($imgs);
    ?>
    <div>
        目前共有<?php echo $img_num; ?>張圖片
    </div>
    <?php foreach($imgs as $img){ ?>
        <img src="<?php echo $img;?>" width="200">
        <form action="" method="post">
            <input type="hidden" name="img" value="<?php echo $img; ?>">
            <input type="submit" value="刪除" name="del">
        </form>
        <hr>
    <?php } ?>
</body>
</html>