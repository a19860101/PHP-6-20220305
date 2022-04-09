<?php
    session_start();
    if(isset($_REQUEST['del'])){
        session_destroy();
        header('location:index.php');
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
    <form action="result.php" method="post">
        <input type="text" name="name" placeholder="姓名">
        <input type="text" name="phone" placeholder="電話">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" value="建立session">
    </form>

    <div>
        
        <?php if(isset($_SESSION['USER'])){ ?>
            <h1>USER: <?php echo $_SESSION['USER']['name']; ?></h1>
            <div>電話:<?php echo $_SESSION['USER']['phone']; ?></div>
            <div>E-mail:<?php echo $_SESSION['USER']['email']; ?></div>
        <?php }else{ ?>
            <div>目前尚無session</div>
        <?php } ?>
    </div>
    <form action="" method="post">
        <input type="submit" name="del" value="清除session">
    </form>
</body>
</html>