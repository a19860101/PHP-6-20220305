<?php
    include('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\File;

    $cover = File::upload($_FILES['cover']);

    Post::store($_REQUEST,$cover);

    header('location:../index.php');