<?php
    //運算子

    $a = 10;
    $b = 7;
    
    // 算術運算子
    echo $a + $b;
    echo '<br>';
    echo $a - $b;
    echo '<br>';
    echo $a * $b;
    echo '<br>';
    echo $a / $b;
    echo '<br>';
    echo $a % $b;//求餘數
    echo '<br>';

    // 比較運算子
    var_dump($a > $b);
    echo '<br>';
    var_dump($a >= $b);
    echo '<br>';
    var_dump($a < $b);
    echo '<br>';
    var_dump($a <= $b);
    echo '<br>';
    var_dump($a == $b);
    echo '<br>';
    var_dump($a != $b);
    echo '<br>';
    var_dump($a <> $b);

    // 指定運算子

    // echo $a = $b;
    // echo '<br>';
    // echo $a += $b; //$a = $a + $b;
    // echo '<br>';
    // echo $a -= $b; //$a = $a - $b;
    // echo '<br>';
    // echo $a *= $b; //$a = $a * $b;
    // echo '<br>';
    // echo $a /= $b; //$a = $a / $b;
    // echo '<br>';
    // echo $a %= $b; //$a = $a % $b;
    echo '<br>';

    // 邏輯運算子 AND OR NOT

    var_dump($a > 0 && $b > 0);
    var_dump($a > 0 || $b < 0);
    var_dump(!$a);

    // 三元運算子
    $x = -10;

    echo $x > 0 ? '正數':'負數';


