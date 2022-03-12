<?php
    $drinks = [
        '熟成紅茶','胭脂紅茶','麗春紅茶','春芽綠茶','熟成歐蕾'
    ];
    $beans = [
        'name'=> '阿拉比卡',
        'area'=> '高海拔',
        'shape'=> '圓形'
    ];

    // count() 計算陣列內數量
    // echo count($beans);

    // implode() 陣列->字串
    
    // echo implode('、',$drinks);
    // echo implode('、',$beans);

    // explode() 字串->陣列
    $str = '拿鐵,美式,摩卡,卡布奇諾';
    $coffees = explode(',',$str);
    // print_r($coffees);


    // is_array() 判斷是否為陣列
    // var_dump(is_array($beans));
    // var_dump(is_array($str));

    // in_array() 判斷陣列內的資料是否存在
    // var_dump(in_array('麗春紅茶',$drinks));
    // var_dump(in_array('奶茶',$drinks));

    // extract() 解構
    extract($beans);
    // $name = $beans['name'];
    // $area = $beans['area'];
    // $shape = $beans['shape'];

    // echo $name;
    // echo $area;
    // echo $shape;

    // compact() 緊湊
    $coffee = '拿鐵';
    $price = '120';
    $brand = '星巴克';

    // $c = [$coffee,$price,$brand];
    // $c = [
    //     'name'=>$coffee,
    //     'price'=>$price,
    //     'brand'=>$brand
    // ];
    // print_r($c);

    $coffeeArray = compact('coffee','price','brand');
    // print_r($coffeeArray);

    // shuffle() 隨機
    shuffle($drinks);
    echo implode('<br>',$drinks);