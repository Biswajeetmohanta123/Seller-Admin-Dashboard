<?php
session_start();
     include 'db.php';
     if(!isset($_SESSION['Arjun'])){
      header("location:index.php");
  }
     if(isset($_GET['id']))
     {
      $uid=$_GET['id'];
      $query="delete from costomer_master where costomer_id='$uid'";
      mysqli_query($con,$query);
   echo "<script>alert('deleted succesfully.');</script>";
   echo "<script>window.location='viewcostomer.php';</script>";
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>Dschool</title>
    
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
                    <span class="text">Viewcostomer</span>
                </div>
                <div class="table_responsive" style="max-height: 600px;">
    <table>
      <thead>
          <tr>
            <th><strong>Sl No.</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Address</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Contact</strong></th>
            <th><strong>gst_type</strong></th> 
            <th><strong>edit</strong></th> 
            <th><strong>delete</strong></th> 
          </tr>
    </thead>
          <?php
    $count=1;
    $sel_query="select * from costomer_master ORDER BY costomer_id asc;";
    $result = mysqli_query($con,$sel_query);
    while ($row =mysqli_fetch_array($result)) 
    {
    ?>


       <tr>
       <td align="center"><?php echo $count;?></td>
            <td align="center"><?php echo $row['costomer_name'];?></td>
            <td align="center"><?php echo $row['costomer_address'];?></td>
            <td align="center"><?php echo $row['costomer_email'];?></td>
            <td align="center"><?php echo $row['costomer_contact'];?></td>
            <td align="center"><?php echo $row['gst_type'];?></td>
            <td align="center">

            <a href="updatecostomer.php?vid=<?php echo $row['costomer_id'];?>">
              <button type="button" style="background: linear-gradient(
        130deg,
        orange,
        red
    ); color: #ffffff;
    border-radius: 3px; border: none;">Edit</button>
            </a>
            </td>
            <td align="center">

<a href="viewcostomer.php?id=<?php echo $row['costomer_id'];?>">

  <button type="button" onclick="return confirm('do you want to delete');" style="background: linear-gradient(
        130deg,
        #6f6df4,
        red
    ); color: #ffffff;
    border-radius: 3px; border: none;">Delete</button>
</a>
</td>
            
            
    </tr>
    <?php $count++; ?>

    <?php } ?>


    
    

        
    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>

        