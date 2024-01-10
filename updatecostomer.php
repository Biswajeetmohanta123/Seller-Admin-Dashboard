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
    $uid=$_GET['vid'];
    $name=$_POST['name'];
    $address =$_POST['address'];
    $email = $_POST['email'];
    $contact= $_POST['contact'];
   $gst= $_POST['gst']; 
   
   $ins_query="update costomer_master set costomer_name='$name',costomer_address='$address',costomer_email='$email',costomer_contact='$contact',gst_type='$gst' where costomer_id='$uid'";
   mysqli_query($con,$ins_query);
   echo "<script>alert('updated succesfully.');</script>";
   echo "<script>window.location='viewcostomer.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
    <?php
    $uid=$_GET['vid'];
    $ret=mysqli_query($con,"select * from costomer_master where costomer_id='$uid'");
    $row=mysqli_fetch_array($ret);
    ?>
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
                    <span class="text">UpdateCustomer</span>
                </div>
           
                <div class="container">
       <h1>Edit information of :-<?php echo $row['costomer_name'];?></h1>
   <form name="form" method="post" action="">
    Name
   <p><input type="text" name="name" value="<?php echo $row['costomer_name'];?>"/></p>
   Address
   <p><input type="text" name="address" value="<?php echo $row['costomer_address'];?>"/></p> 
   Email
   <p><input type="text" name="email"  value="<?php echo $row['costomer_email'];?>"/></p> 
   Contact
   <p><input type="text" name="contact"  value="<?php echo $row['costomer_contact'];?>"/></p>
   Gst Type
   <select name="gst" required>
   <option value=<?php echo $row['gst_type'];?>><?php echo $row['gst_type'];?></option>
        <option value="">*Select gst_type*</option>
        <option value="igst">igst</option>
        <option value="gst">gst</option>
</select>
<button name="register">Update</button>
</form>
</div>
        </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>
