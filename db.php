<?php
date_default_timezone_set('Asia/Kolkata');
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'internshipproject');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection

if($con){
    
}else{
    echo "<script>alert('Somthing Error.');</script>";
}
?>