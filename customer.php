<?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
    header("location:index.php");
}
?>
<?php

if(isset($_POST['register']))
{
    $costomer_name=$_POST['costomer_name'];
    $costomer_address=$_POST['costomer_address'];
    $costomer_email=$_POST['costomer_email'];
    $costomer_contact=$_POST['costomer_contact'];
    $gst_type=$_POST['gst_type'];
   
    
    //insert into table//
    $ins_query="insert into costomer_master(`costomer_name`,`costomer_address`,`costomer_email`,`costomer_contact`,`gst_type`) values('$costomer_name','$costomer_address','$costomer_email','$costomer_contact','$gst_type')";
    mysqli_query($con,$ins_query);
    echo "<script>alert('Data Inserted Sucessfully.');</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
<?php
	include 'navbar.php';
	?>
    <section class="dashboard">
    <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <img src="images/profile.jpeg" alt="arjun">
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Customer</span>
                </div>
           
                <div class="container">   
<h1>Insert New Record</h1>
<form name="form" method="POST" > 
<p><input type="text" name="costomer_name" placeholder="Enter Name" required /></p>
    <p><input type="text" name="costomer_address" placeholder="Enter Address" required /></p>
    <p><input type="text" name="costomer_email" placeholder="Enter Email id" required /></p>
    <p><input type="text" name="costomer_contact" placeholder="Enter contact" required /></p>
    
    <select name="gst_type">
        <option value="">--Select gst_type--</option>
        <option value="igst">igst</option>
        <option value="gst">gst</option>
    </select>
    <button name="register">Submit</button>
    <!-- <p><input name="register" type="submit" value="Submit" /></p> -->
          
</form>
                </div>
        </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>

