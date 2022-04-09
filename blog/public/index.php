<?php
    include('../vendor/autoload.php');
    use Gjun\Blog\Config\DB;
    use Gjun\Blog\Config\Test;

    // echo DB::now();

    echo DB::now();

    // echo Gjun\Blog\Config\Test::go();
    echo Test::go();