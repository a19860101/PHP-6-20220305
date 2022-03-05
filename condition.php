<?php
    $x =  44;
    //if...
    if($x > 0){
        echo 'OK';
    }

    //if...else
    if($x > 0){
        echo 'OK part 2';
    }else{
        echo 'ERROR part 2';
    }

    //if...else if...

    if($x >= 80){
        echo 'GOOD';
    }else if($x > 60){
        echo 'SOSO';
    }else{
        echo 'BAD';
    }
    echo '<br>';
    // switch
    $y = 0;
    switch($y){
        case 0:
            echo 0;
            break;
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        default:
            echo 'ERROR';
    }
    echo '<br>';
    switch(true){
        case $y > 0:
            echo '正';
            break;
        case $y < 0:
            echo '負';
            break;
        default:
            echo 0;
    }