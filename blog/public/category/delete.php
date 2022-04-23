<?php
    include('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Category;

    Category::delete($_REQUEST);

    header('location:index.php');