<?php
    include('function.php');

    store($_REQUEST);

    // checkMail($_REQUEST['email']);

    header('location:index.php');