<!-- timeIntervel footAdmInxLogin -->
<?php
include 'database/config.php';
 session_start();
$id= $_SESSION['id'];

$date1 = new DateTime("2021-05-15 15:29:00");
$date2 = new DateTime("now");
$diff = $date1->diff($date2);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Malli</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/tooltipster.bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- <?php if($diff->invert == 1){ ?> -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area">
    <div class="header-menu-content" style="background-color: #d1f3ff;">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.php" class="logo"><img src="images/logo.png" alt="logo" style="width: 110px"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                   <!--  <li>
                                        <a href="materials.php">Study Materials</a>
                                    </li> -->
                                   <!--  <li>
                                        <a href="syllabus.php">Syllabus</a>
                                    </li> -->
                                    <li>
                                        <a href="gallery.php">Gallery</a>
                                    </li>


                                 <?php if(!isset($_SESSION['myid'])){?>
                         <li><a href="sign-up.php" style="color: #26b559;font-size: 16px;">Register</a></li>
                        <li><a href="login.php" style="color: #26b559;font-size: 16px;">Login</a></li>
                         <?php }else{ ?>
                         <li><a href="student/index.php" style="color: #26b559;font-size: 16px;">Dashboard</a></li><br>
                            <li><a href="logout.php" style="color: #26b559;font-size: 16px;">Logout</a></li>
                          <?php } ?>


                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->

<!-- <?php }else{} ?> -->