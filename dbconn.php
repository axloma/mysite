<?php
$db_server="localhost";
$db_username="root";
$db_pass="";
$db_name="mywebd";
//TODO creat a connection to database and store the connection in $variable
$conn = mysqli_connect($db_server,$db_username,$db_pass,$db_name);
//TODO close the connection 
//mysqli_close($conn);