<?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
    header("location:index.php");
}
if (isset($_POST['register'])) 
{
    $vendor = $_POST['vendor'];
    $service = $_POST['service'];
    $samt = $_POST['samount'];
    $inv_no = $_POST['invoicenumber'];
    $in = "INV";
    $invoice_no = $in.sprintf('%03d',$inv_no);
    $invoice_date = $_POST['invoicedate'];
    $damt = $_POST['damount'];
    $retv = mysqli_query($con, "SELECT * FROM vendor_master WHERE vendor_id='$vendor'");
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
$vendor_name=$_POST['vendor_name'];
$service_name=$_POST['service_name'];
$service_amount=$_POST['samount'];
$gst_amount=$_POST['gamt'];
$discount_amount=$_POST['damount'];
$total=$_POST['total'];
$ins_query="insert into purchase_master values('','$invoice_number','$invoice_date','$vendor_name',
'$service_name','$service_amount','$gst_amount','$cgstamt','$sgstamt','$discount_amount','$total')";
mysqli_query($con,$ins_query);
echo "<script>alert('Data Inserted Sucessfully.');</script>";
echo "<script>window.location='vendor.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mycss.css">
    <title>nextpurchase</title>
    
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
                    <span class="text">Purchase</span>
                </div>
                <div class="container" style="margin-top: 20px;">
        
 <form name="form" method="POST">
    <p><input type="hidden" name="vid" value="<?php echo $rowv['vendor_id']; ?>"/></p>
    <p><input type="hidden" name="sid" value="<?php echo $rows['service_id']; ?>"/></p>
    <p><input type="hidden" name="invoicenumber" value="<?php echo $invoice_no ?>"/></p>
    <p><input type="hidden" name="invoicedate" value="<?php echo $invoice_date ?>"/></p>

    <span>Vendor name</span>
    <p><input type="text" name="vendor_name" value="<?php echo $rowv['vendor_name']; ?>"/></p>

    <span>GST Type</span>
    <P><input type="text" name="vgst" value="<?php echo $rowv['gst_type']; ?>"/></p>

    <span>Service name</span>
     <p><input type="text" name="service_name" value="<?php echo $rows['service_name']; ?>"/></p>
            
    <span>GST per</span>
    <p><input type="text" name="sgst" value="<?php echo $rows['gst_per']; ?>"/></p>
 

        <span>service Amount</span>
        <p><input type="text" name="samount" value="<?php echo $samt?>"/></p>
         
         <span>Discount</span>
         <p><input type="text" name="damount" value="<?php echo $damt?>"/></p>
         
        <span>GST amount</span>
        <p><input type="text" name="gamt" value="<?php echo $gamt;?>"/></p>
         
         <span>Total</span>
         <p><input type="text" name="total" value="<?php echo $total; ?>"/> </p>        
        
    <button name="save">Save</button>

</form> 
</table>
            </div>
        </div>
    </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>
