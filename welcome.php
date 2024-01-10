<?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	

    <title>Admin Dashboard Panel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/mystyle.css">
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
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
					<i class="bi bi-person-circle"></i>
                        <span class="text">Total Customer</span>

			<?php
                        $sql = "SELECT costomer_id FROM costomer_master ORDER BY costomer_id"; 
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_num_rows($res);
                         ?>

                        <span class="number" data-val="<?php echo $row; ?>">0</span>
                    </div>
                    <div class="box box2">
                        <i class="bi bi-person"></i>
                        <span class="text">Total Vendor</span>

			<?php
                        $sql = "SELECT vendor_id FROM vendor_master ORDER BY vendor_id"; 
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_num_rows($res);
                         ?>

                        <span class="number" data-val="<?php echo $row; ?>">0</span>
                    </div>
                    <div class="box box3">
                        <i class="bi bi-receipt"></i>
                        <span class="text">Total Sale</span>

			<?php
                        $sql = "SELECT sale_id FROM sale_master ORDER BY sale_id"; 
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_num_rows($res);
                         ?>
                        <span class="number" data-val="<?php echo $row; ?>">0</span>
                    </div>
			<div class="box box4">
                        <i class="bi bi-bag"></i>
                        <span class="text">Total Purchase</span>

			<?php
                        $sql = "SELECT purchase_id FROM purchase_master ORDER BY purchase_id"; 
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_num_rows($res);
                         ?>

                        <span class="number" data-val="<?php echo $row; ?>">0</span>
                    </div>
                </div>

                
                <div class="table_responsive" style="margin-top: 7%; max-width: 1100px;">
                <h3>Latest Purchase</h3>
    <table>
      <thead>
          <tr>
            <th><strong>Sl No.</strong></th>
            <th><strong>Vendor Name</strong></th>
            <th><strong>Service Name</strong></th>
            <th><strong>Invoice Number</strong></th>
            <th><strong>Invoise Date</strong></th>
            <th><strong>Service Amount</strong></th> 
            <th><strong>Gst Amount</strong></th> 
            <th><strong>Cgst Amount</strong></th>
            <th><strong>Sgst Amount</strong></th>
            <th><strong>Discount Amount</strong></th> 
            <th><strong>Total</strong></th> 
          </tr>
    </thead>
    <?php
    $count=1;
    $sel_query="select * from purchase_master order by purchase_id desc limit 6;";
    $result = mysqli_query($con,$sel_query);
    while ($row =mysqli_fetch_array($result)) 
    {
    ?>


       <tr>
       <td align="center"><?php echo $count;?></td>
            <td align="center"><?php echo $row['vendor_name'];?></td>
            <td align="center"><?php echo $row['service_name'];?></td>
            <td align="center"><?php echo $row['invoice_number'];?></td>
            <td align="center"><?php echo $row['invoice_date'];?></td>
            <td align="center"><?php echo $row['service_amount'];?></td>
            <td align="center"><?php echo $row['gst_amount'];?></td>
            <td align="center"><?php echo $row['cgst_amount'];?></td>
            <td align="center"><?php echo $row['sgst_amount'];?></td>
            <td align="center"><?php echo $row['discount_amount'];?></td>
            <td align="center"><?php echo $row['total'];?></td>
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
<script>
let valueDisplays = document.querySelectorAll(".number");
let interval = 400;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
</script>
</html>