<?php

$db_host = "us-cdbr-east-06.cleardb.net";
$db_user = "bf4b6baeca1403";
$db_pass = "957c682e";
$db_name = "heroku_e9f26e96f7ffdaa";
    
    #$db_con = mysqli_connect("127.0.0.1","root","","isg");
    $db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>