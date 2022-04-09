<?php
    include('function/User.php');
    include('function/Post.php');

    use User\User;
    use Post\Post;

    echo User::index();
    echo Post::index();

    // echo User\User::index();
    // echo Post\Post::index();

    // $u = new User\User;
    // $p = new Post\Post;