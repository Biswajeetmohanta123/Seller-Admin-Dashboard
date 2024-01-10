<!-- <?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
       header("location:index.php");
   }
?> -->

<!DOCTYPE html>
 <html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Purchase</title>
        <link rel="stylesheet" href="css/mycss.css">
        
</head>

<body>
<?php
	include ('navbar.php');
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
                <div class="container">
                        <h1>Sale</h1>
        <form method="POST" action="nextsale.php">
                <p><input type="text" name="invoicenumber" placeholder="Enter number" required /></p>
                <p><input type="date" name="invoicedate" placeholder="Enter date" required /></p>
                <p><select name="costomer" required>
                                <option value="">*Select costomer*</option>
                                <?php
                                $query = "select * from costomer_master order by costomer_name";
                                $resultv = mysqli_query($con, $query);
                                while ($rowv = mysqli_fetch_array($resultv)) {
                                        echo "<option value='" . $rowv['costomer_id'] . "'>" . $rowv['costomer_name'] . "</option>";
                                }
                                ?>
                        </select></p>
                <p><select name="service" required>
                                <option value="">*Select service*</option>
                                <?php
                                $query = "select * from service_master order by service_name";
                                $results = mysqli_query($con, $query);
                                while ($rows = mysqli_fetch_array($results)) {
                                        echo "<option value='" . $rows['service_id'] . "'>" . $rows['service_name'] . "</option>";
                                }
                                ?>
                        </select></p>
                <p><input type="text" name="samount" placeholder="Enter service amount" required /></p>
                <p><input type="text" name="damount" placeholder="Enter discount amount" required /></p>
                <button name="register">Next</button>
                <!-- <p><input  type="submit" value="Next" /></p> -->
        </form>
        </div>
        </div>
        </div>
</section>
<script src="js/script.js"></script>
</body>
</html>