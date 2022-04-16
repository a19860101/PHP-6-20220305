<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    Post::update($_REQUEST);
    $id = $_REQUEST['id'];
    header('location:show.php? id='.$id);