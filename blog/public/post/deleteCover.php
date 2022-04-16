<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\File;
    use Gjun\Blog\Controller\Post;


    $path = 'images/'.$_REQUEST['cover'];
    File::delete($path);
    Post::deleteCover($_REQUEST['id']);

    header("location:edit.php?id=".$_REQUEST['id']);