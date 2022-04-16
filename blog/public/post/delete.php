<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    Post::delete($_REQUEST);

    header('location:../index.php');