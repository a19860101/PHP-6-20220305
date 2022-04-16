<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\File;

    if($_REQUEST['cover'] != null){
        $path = 'images/'.$_REQUEST['cover'];
        File::delete($path);
    }
    Post::delete($_REQUEST);

    header('location:../index.php');