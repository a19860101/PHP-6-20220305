<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\File;

    $cover = File::upload($_FILES['cover']);
    Post::update($_REQUEST,$cover);

    $id = $_REQUEST['id'];
    header('location:show.php? id='.$id);