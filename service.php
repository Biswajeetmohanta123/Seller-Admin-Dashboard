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
    $service_name=$_POST['service_name'];   
    $gst_per=$_POST['gst_per'];
   
    
    //insert into table//
    $ins_query="insert into service_master(`service_name`,`gst_per`) values('$service_name','$gst_per')";
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
                    <span class="text">Service</span>
                </div>
                <div class="container">
<h1>Insert New Record</h1>
<form name="form" method="POST" > 
<p><input type="text" name="service_name" placeholder="Enter Name" required /></p>
<p><input type="decimal" name="gst_per" placeholder="gst" required /></p> 
<button name="register">Submit</button>  
          
</form>
                </div>
            </div>
        </div>
</section>
<script src="js/script.js"></script>
</body>
</html>

