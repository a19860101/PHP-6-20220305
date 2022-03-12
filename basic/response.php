<?php
    // var_dump($_POST);
    extract($_REQUEST);
    // echo $_POST['name'];
    // echo '<br>';
    // echo $_POST['email'];
    echo $name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $edu;
    echo  '<br>';
    echo $gender;
    echo '<br>';
    // print_r($skill);
    $skill = implode(',',$skill);
    echo $skill;
    echo '<br>';
    echo $content;