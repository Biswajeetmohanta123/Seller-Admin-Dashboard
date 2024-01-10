<?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
    header("location:index.php");
}
if (isset($_POST['register'])) 
{
    $costomer = $_POST['costomer'];
    $service = $_POST['service'];
    $samt = $_POST['samount'];
    $in= $_POST['invoicenumber'];
    $inv = "INV";
    $invoice_no = $inv.sprintf('%03d',$in);
    $invoice_date = $_POST['invoicedate'];
    $damt = $_POST['damount'];
    $retv = mysqli_query($con, "SELECT * FROM costomer_master WHERE costomer_id='$costomer'");
    $rowv = mysqli_fetch_array($retv);
    $rets = mysqli_query($con, "SELECT * FROM service_master WHERE service_id='$service'");
    $rows = mysqli_fetch_array($rets);
    $gst = $rows['gst_per'];
    $gamt = $samt * $gst / 100;
    $total = $samt + $gamt - $damt;
}
?>
<?php
if(isset($_POST['save']))
{
$gst_type=$_POST['vgst'];
if($gst_type=="gst")
{
 $gamt=$_POST['gamt'];
 $cgst=$gamt/2;
 $cgstamt=round($cgst,2);
 $sgstamt=$cgstamt;
}
else if($gst_type=="igst")
{
    $cgstamt=0;
    $sgstamt=0;
}
$invoice_number=$_POST['invoicenumber'];
$invoice_date=$_POST['invoicedate']; 
$dt=str_replace('/','-',$invoice_date);
$timestamp=strtotime($dt);
$new_date=date("Y-m-d",$timestamp);
$costomer_name=$_POST['costomer_name'];
$service_name=$_POST['service_name'];
$service_amount=$_POST['samount'];
$gst_amount=$_POST['gamt'];
$discount_amount=$_POST['damount'];
$total=$_POST['total'];
$ins_query="insert into sale_master  values('','$invoice_number','$invoice_date','$costomer_name',
'$service_name','$service_amount','$gst_amount','$cgstamt','$sgstamt','$discount_amount','$total')";
mysqli_query($con,$ins_query);
echo "<script>alert('Data Inserted Sucessfully.');</script>";
echo "<script>window.location='customer.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nextpurchase</title>
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
            <!-- <img src="images/profile.jpeg" alt="arjun"> -->
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Sale</span>
                </div>
                <div class="container" style="margin-top: 20px;">
 <form name="form" method="POST">


    <input type="hidden" name="vid" value="<?php echo $rowv['costomer_id']; ?>"/>
    <input type="hidden" name="sid" value="<?php echo $rows['service_id']; ?>"/>
    <input type="hidden" name="invoicenumber" value="<?php echo $invoice_no ?>"/>
    <input type="hidden" name="invoicedate" value="<?php echo $invoice_date ?>"/>
    costomer name
    <input type="text" name="costomer_name" value="<?php echo $rowv['costomer_name']; ?>"/>



    GST Type<input type="text" name="vgst" value="<?php echo $rowv['gst_type']; ?>"/>

     Service name<input type="text" name="service_name" value="<?php echo $rows['service_name']; ?>"/>
           
    GST per <input type="text" name="sgst" value="<?php echo $rows['gst_per']; ?>"/>

        service Amount<input type="text" name="samount" value="<?php echo $samt?>"/>
         
         Discount <input type="text" name="damount" value="<?php echo $damt?>"/>
    
   
        GST amount<input type="text" name="gamt" value="<?php echo $gamt;?>"/>
         
       
         Total<input type="text" name="total" value="<?php echo $total; ?>"/>         
         <button name="save">Save</button>
   

</form>

        

                </div>
            </div>
        </div>
</section>
<script src="js/script.js"></script>
</body>
</html>
