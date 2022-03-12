<?php
    $a = array();
    $a[0] = 'Apple';
    $a[1] = 'Banana';
    $a[2] = 'Cat';
    // var_dump($a); 
    // print_r($a);

    $b = array('滷肉飯','雞肉飯','貢丸湯');
    // print_r($b);

    $c = ['滷肉飯','雞肉飯','貢丸湯','123s','9876'];
    // print_r($c);

    // echo $c[2];

    // for($i=0;$i<3;$i++){
    //     echo $c[$i];
    // }

    // foreach($c as $data){
    //     echo $data;
    // }

    $array = [
        'name' => 'John',
        'mail' => 'john@gmail.com',
        'phone'=> '0987654321'
    ];
    // print_r($array);
    // echo $array['name'];
    // echo '<br>';
    // echo $array['mail'];
    // echo '<br>';
    // echo $array['phone'];
    // echo '<br>';
    foreach($array as $key => $val){
        echo $key.':'.$val;
        echo '<br>';
    }
    