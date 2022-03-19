<?php
    include('function.php');
   
    update($_REQUEST);

    echo "<script>alert('學生資料已更新!');</script>";
    header('refresh:0;url=index.php');

