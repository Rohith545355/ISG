<?php
require('db.php');
$username=$_GET['username'];
$query= "UPDATE `users` set volunteer='no' where username='$username'";
$result= mysqli_query($db_con, $query);
header("Location: admin_home.php"); 
?>