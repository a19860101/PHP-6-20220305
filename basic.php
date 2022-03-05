<?php
    // echo 'Hello PHP';

    // echo "Hello PHP";

    // print_r('Hello Print');

    // var_dump(123456);

    //單行註解(Ctrl + /)
    #單行註解

    /*
        多行註解 (Alt + Shift + A)
    */

    // 變數

    // $a = 100;
    // $b = 'hello';

    /* 
    變數命名規則
    1.首字只可使用英文
    2.大小寫有別
    3.符號只可使用底線
    4.不可使用保留字
    */

    // echo $b;
    // print_r($a);
    // var_dump($b);

    // echo '您是第$a位訪客';
    // echo '您是第{$a}位訪客';
    // echo "您是第$a 位訪客";
    // echo "您是第{$a}位訪客";

    // echo '您是第'.$a.'位訪客';

    
    $a = 'Hello';
    $b = 123;
    $c = 1.4;
    $d = true;

    var_dump($d);

    define('A','常數1');
    echo A;