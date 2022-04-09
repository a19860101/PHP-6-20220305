<?php
    class Test {
        public $x = 100;
        private $y = 50;
        //只可使用在自己的類別
    }

    class Test2 extends Test {

    }

    $john = new Test2;
    echo $john->y;