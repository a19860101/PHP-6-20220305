<?php
    include('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\File;

    $t = File::upload($_FILES['cover']);
    echo $t;

    // Post::store($_REQUEST);

    // header('location:../index.php');