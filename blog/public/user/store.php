<?php
    include('../../vendor/autoload.php');

    use Gjun\Blog\Controller\User;

    User::store($_REQUEST);