<?php
    session_start();
    $_SESSION['USER'] = $_REQUEST;
   
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
    <h1>USER: <?php echo $_SESSION['USER']['name']; ?></h1>
    <div>電話:<?php echo $_SESSION['USER']['phone']; ?></div>
    <div>E-mail:<?php echo $_SESSION['USER']['email']; ?></div>

    <a href="index.php">建立session</a>
</body>
</html>