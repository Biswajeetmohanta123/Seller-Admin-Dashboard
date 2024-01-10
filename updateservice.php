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
    
   $gst= $_POST['gst']; 
   
   $ins_query="update service_master set service_name='$name',gst_per='$gst' where service_id='$uid'";
   mysqli_query($con,$ins_query);
   echo "<script>alert('updated succesfully.');</script>";
   echo "<script>window.location='viewservice.php';</script>";
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
    $ret=mysqli_query($con,"select * from service_master where service_id='$uid'");
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
                    <span class="text">UpdateService</span>
                </div>
           
                <div class="container">
       <h1>Edit information of :-<?php echo $row['service_name'];?></h1>
   <form name="form" method="post" action="">
    Name
   <p><input type="text" name="name" value="<?php echo $row['service_name'];?>"/></p>
   Gst
   <p><input type="binary" name="gst" value="<?php echo $row['gst_per'];?>"/></p>

   <button name="register">Update</button>
   <!-- <p><input name="register" type="submit" value="Update" /></p> -->
</form>
</div>
        </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>
