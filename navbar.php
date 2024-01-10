<!DOCTYPE html>
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
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body>
<nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.jpeg" alt="">
            </div>

            <span class="logo_name" style="color: white;">Dashboad</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="welcome.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="purchase.php">
                    <i class="bi bi-bag"></i>
                    <span class="link-name">Purchase</span>
                </a></li>
                <li><a href="sale.php">
                    <i class="bi bi-receipt"></i>
                    <span class="link-name">Sale</span>
                </a></li>
    
                
                
            <li>
          <div class="iocn-link" >
            <a href="#" >
	    <i class="bi bi-gear"></i>
             
              <span class="link-name" style="color: white;">Setting</span>
            </a>
            <i class="bx bxs-chevron-down arrow" style="color: white;"></i>
          </div>
          <ul class="sub-menu" >
            <!-- <li><a class="link_name" href="#">Setting</a></li> -->
            <!-- <li><a href="viewcostomer.php" style="color: white;">Viewcostomer</a></li> -->
            <!-- <li><a href="viewservice.php" style="color: white;">Viewservice</a></li> -->
            <li><a href="vendor.php" style="color: white;">Vendor</a></li>
            <li><a href="viewvendor.php" style="color: white;">All Vendor</a></li>
            <li><a href="service.php" style="color: white;">Service</a></li>
            <li><a href="viewservice.php" style="color: white;">All Service</a></li>
            <li><a href="customer.php" style="color: white;">Customer</a></li>
            <li><a href="viewcostomer.php" style="color: white;">All Customer</a></li>
          </ul>
        </li>
<li>
          <div class="iocn-link" >
            <a href="#" >
              <i class="uil uil-chart" style="color: white;"></i>
              <span class="link-name" style="color: white;">Report</span>
            </a>
            <i class="bx bxs-chevron-down arrow" style="color: white;"></i>
          </div>
          <ul class="sub-menu" >
            <!-- <li><a class="link_name" href="#">Setting</a></li> -->
            <li><a href="viewpurchase.php" style="color: white;">Viewpurchase</a></li>
            <li><a href="viewsale.php" style="color: white;">Viewsale</a></li>
          </ul>
        </li>
        </ul>

            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
</body>
</html>