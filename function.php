<?php
    // function test(){
    //     $a = 100;
    //     echo $a;
    // }
    // test();
    // function total(){
    //     $price = 100;
    //     return $price * 1.1;
    // }
    
    // $total = total();
    
    // var_dump(test());

    // function total($price){
    //     return $price * 1.1;
    // }

    // echo total(987);

    function us_nt($price,$exchange = 28){
        return $price * $exchange;
    }

    echo us_nt(699,28.5);

    function title($name){
        echo '<h1>'.$name.'</h1>';
    }

    title('PHP');