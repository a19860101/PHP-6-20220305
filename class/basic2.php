<?php
    class Test {
        public $x = 100;
        private $y = 50;
        //只可使用在自己的類別

        protected $z = 99;

        function qwer(){
            return $this->z;
        }
    }

    class Test2 extends Test {
        function asdf(){
            return $this->z;
        }
    }

    $john = new Test2;
    // echo $john->z;
    echo $john->asdf();