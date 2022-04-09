<?php
    include('function/User.php');
    include('function/Post.php');

    echo User\User::index();
    echo Post\Post::index();

    // $u = new User\User;
    // $p = new Post\Post;