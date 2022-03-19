<?php
    include('function.php');
   
    // header('location:index.php');
    store($_REQUEST);
    
    echo "<script>alert('學生資料已建立!');</script>";
    header('refresh:0;url=index.php');