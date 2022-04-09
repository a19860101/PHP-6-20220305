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
        <input type="text" name="user">
        <input type="submit" value="建立session">
    </form>

    <div>
        
        <?php
            if(isset($_SESSION['USER'])){
                echo '目前session為'.$_SESSION['USER'];
            }else{
                echo '目前尚無session';
            }
        ?>
    </div>
    <form action="" method="post">
        <input type="submit" name="del" value="清除session">
    </form>
</body>
</html>