<?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
        header("location:index.php");
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>Purchase</title>
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
                    <span class="text">ViewPurchase</span>
                </div>
                <div class="table_responsive" style="max-height: 600px;">
    <table>
      <thead>
          <tr>
            <th><strong>Sl No.</strong></th>
            <th><strong>customer Name</strong></th>
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
    $sel_query="select * from sale_master;";
    $result = mysqli_query($con,$sel_query);
    while ($row =mysqli_fetch_array($result)) 
    {
    ?>


       <tr>
       <td align="center"><?php echo $count;?></td>
            <td align="center"><?php echo $row['customer_name'];?></td>
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
    </section>
    <script src="js/script.js"></script>
</body>

</html>