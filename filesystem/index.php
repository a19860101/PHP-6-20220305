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
    ?>
    <?php foreach($imgs as $img){ ?>
        <img src="<?php echo $img;?>" width="200">
    <?php } ?>
</body>
</html>