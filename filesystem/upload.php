<?php
    extract($_FILES['img']);
    // echo $_FILES['img']['name'];
    // echo $name;
    // echo '<br>';
    // echo $_FILES['img']['size'];
    // echo $size;
    // echo '<br>';
    // echo $_FILES['img']['error'];
    // echo $error;
    // echo '<br>';
    // echo $_FILES['img']['tmp_name'];
    // echo $tmp_name;
    // echo '<br>';
    // echo $_FILES['img']['type'];
    // echo $type;
    // echo '<br>';

    //自訂檔名
    $img_name = md5(time());
    //副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    //完整名稱
    $fullname = $img_name.'.'.$ext;

    $uploadFolder = 'images';

    if(!is_dir($uploadFolder)){
        mkdir($uploadFolder);
    }

    $target = $uploadFolder.'/'.$fullname;

    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                echo '上傳成功';
                header('refresh:1;url=form.php');
            }else{
                echo '上傳失敗';
            }
            
            break;
        case 1:
            echo '上傳檔案過大(伺服器設定)';
            break;
        case 2:
            echo '上傳檔案過大(表單設定)';
            break;
        case 3:
            echo '只有部分上傳';
            break;
        case 4:
            echo '請選擇檔案';
            break;            
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '檔案無法寫入';
            break;
        case 8:
            echo '不支援檔案上傳';
            break;
    }