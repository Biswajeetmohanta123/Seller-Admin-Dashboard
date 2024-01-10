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
    $vendor_name=$_POST['vendor_name'];
    $vendor_address=$_POST['vendor_address'];
    $vendor_email=$_POST['vendor_email'];
    $vendor_contact=$_POST['vendor_contact'];
    $state = $_POST['state'];

    if($state=='Odisha'){

	$gst_type = "IGST";

	}else{

	 $gst_type = "GST";

	}
    
    
    
    //insert into table//
    $ins_query="insert into vendor_master(`vendor_name`,`vendor_address`,`vendor_email`,`vendor_contact`,`gst_type`) values('$vendor_name','$vendor_address','$vendor_email','$vendor_contact','$gst_type')";
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
                    <span class="text">Vendor</span>
                </div>
                <div class="container">
<h1>Insert New Record</h1>
<form name="form" method="POST" > 
<p><input type="text" name="vendor_name" placeholder="Enter Name" required /></p>
    <p><input type="text" name="vendor_address" placeholder="Enter Address" required /></p>
    <p><input type="text" name="vendor_email" placeholder="Enter Email id" required /></p>
    <p><input type="text" name="vendor_contact" placeholder="Enter contact" required /></p>
    
    <select name="state">
        <option value="">--Select states--</option>
        
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>

    </select>
   <button name="register">Submit</button>


</form>
                </div>
            </div>
        </div>
    </section>
<script src="js/script.js"></script>
</body>
</html>

