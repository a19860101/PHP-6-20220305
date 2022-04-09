<?php
    class Test {
        function __construct(){
            echo '建構子';
        }

        //靜態方法
        function go(){
            return 'go';
        }
    }


    // $a = new Test;
    // $b = new Test;
    // $c = new Test;

    // echo Test::go();
    $z = Test::go();