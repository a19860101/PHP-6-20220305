<?php 
    if(!session_id()){
        session_start();
    }
?>
<nav>
    <div class="logo">
        <a href="index.php">LOGO</a>
    </div>
    <div>
        <?php if(isset($_SESSION['AUTH'])){ ?>
            <a href="#"><?php echo $_SESSION['AUTH']['name'];?></a>
            <a href="logout.php">登出</a>
        <?php } ?>

        <?php if(!isset($_SESSION['AUTH'])){ ?>
            <a href="register.php">註冊會員</a>
            <a href="login.php">登入</a>
        <?php } ?>
    </div>
</nav>