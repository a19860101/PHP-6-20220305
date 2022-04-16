<?php
    $webroot = 'http://localhost/php-6-20220305/blog/public';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot; ?>">Gjun</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active"  href="<?php echo $webroot; ?>">文章列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>/post/create.php">建立文章</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>/user/register.php" class="nav-link">註冊會員</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">登入</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>