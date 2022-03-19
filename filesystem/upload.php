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

    $uploadFolder = 'photos';
    
    if(!is_dir($uploadFolder)){
        mkdir($uploadFolder);
    }

    $target = $uploadFolder.'/'.$name;

    if($error == 0){
        move_uploaded_file($tmp_name,$target );
    }