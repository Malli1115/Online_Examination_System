<?php
include 'database/config.php';

if (isset($_POST['register'])) {


$fname = ucwords(mysqli_real_escape_string($conn, $_POST['first_name']));
$category = ucwords(mysqli_real_escape_string($conn, $_POST['category']));
$department = ucwords(mysqli_real_escape_string($conn, $_POST['department']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$college = mysqli_real_escape_string($conn, $_POST['college']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);

$sql = "SELECT * FROM tbl_users WHERE email = '$email' OR phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
    $sph = $row['phone'];
    if ($sph == $phone) {
     echo "<script>
alert('Your Email Already  Register');
</script>";    
    }else{
    
    
    }
    
    }
} else {

$sql1 = "INSERT INTO tbl_users ( first_name, last_name, gender, dob, college, position, address, email, phone,role,category,department,password,acc_stat)
VALUES ('$fname', '', '$gender', '1', '$college', '$position', '$address', '$email', '$phone', 'student','$category','$department','$password','1')";

if ($conn->query($sql1) === TRUE) {
   echo "<script>
alert('Register Successfully');
window.location.href='login.php';
</script>";
}
 else {
  echo "<script>
alert('Register Failed');
window.location.href='sign-up.php';
</script>";
}


}

$conn->close();



 }

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
                                        <a href="course-grid.php">Test Syllabus</a>
                                    </li> -->
                                    <li>
                                        <a href="gallery.php">Gallery</a>
                                    </li>
                                     <li>
                                        <a href="login.php" style="color: #26b559;font-size: 16px;">Login</a>
                                    </li>
                                   
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->


<!-- ================================
       START SIGN UP AREA
================================= -->
<section class="sign-up ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-box-shared">
                    <div class="card-box-shared-title text-center">
                        <h3 class="widget-title font-size-25" style="color: #47ad6b;">Regiser Your Account</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="contact-form-action">
                             <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your name" name="first_name" required autocomplete="off">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
        
                                     <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Email Address<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email address" name="email" required autocomplete="off" pattern="[^ @]*@[^ @]*">
                                                <span class="la la-envelope input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter phone" name="phone" required autocomplete="off" pattern="[7-9]{1}[0-9]{9}">
                                                <span class="la la-phone input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->

                                    <div class="col-lg-6">
                                       <div class="input-box">
                                           <label class="label-text">College<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Enter College" name="college" required autocomplete="off">
                                               <span class="la la-map-marker input-icon"></span>
                                           </div>
                                       </div>
                                    </div><!-- end col-lg-6 -->

                                    
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Department<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <select class="form-control" name="department" required>
                                                   <option value="" selected disabled>Select your department</option>
                                                   <option value="ECE" >ECE</option>
                                                   <option value="EEE" >EEE</option>
                                                   <option value="MECH" >MECH</option>
                                                   <option value="OTHERS" >OTHERS</option>

                                               </select>
                                                <!-- <input  type="date" class="form-control date-picker" name="dob" required autocomplete="off" placeholder="Select date of birth">
                                                <span class="la la-user input-icon"></span> -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                     
                                     <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Select Exam Category<span class="primary-color-2 ml-1">*</span>
                                            </label>
                                            <div class="form-group">
                                            <select class="form-control" name="category" required>
                                            <option value="TNEB|TRB" selected >TNEB | TRB</option>
                                           <!--  <?php
                                            include '../database/config.php';
                                            $sql = "SELECT * FROM tbl_categories WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
                                             ?> -->
                                            
                                            </select>
                                        </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                     
                                     <div class="col-lg-6">
                                       <div class="input-box">
                                           <label class="label-text">Current Position<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                            <select class="form-control" name="position" required>
                                                   <option value="" selected disabled>Select Current position</option>
                                                   <option value="FACULTY" >FACULTY</option>
                                                   <option value="STUDENT" >STUDENT</option>
                                                   <option value="OTHER JOBS" >OTHER JOBS</option>
                                                   
                                               </select>
                                           </div>
                                       </div>
                                    </div><!-- end col-lg-6 --> 

                                      <div class="col-lg-6">
                                       <div class="input-box">
                                           <label class="label-text">Place<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Enter City" name="address" required autocomplete="off">
                                               <span class="la la-map-marker input-icon"></span>
                                           </div>
                                       </div>
                                    </div><!-- end col-lg-6 -->
                                   
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Select Gender<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                          <label for="exampleInputEmail1">Male</label>
                                            <input type="radio"  name="gender" value="Male" required>
                                            <label for="exampleInputEmail1">Female</label>
                                            <input type="radio" name="gender" value="Female" required>
                                        </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->

                                     <div class="col-lg-6">
                                       <div class="input-box">
                                           <label class="label-text">Your password<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                            <input type="text" class="form-control" name="pass" id="number" onkeypress="return isNumberKey(event)" placeholder="Enter 6 digit number" pattern="[0-9]{6}" required>
                                               <span class="fa fa-lock input-icon"></span>
                                           </div>
                                       </div>
                                    </div><!-- end col-lg-6 --> 

                                    <div class="col-lg-6">
                                        <div class="btn-box">
                                            <button class="theme-btn" type="submit" name="register">register</button>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                     <div class="col-lg-6">

                                        <p>Do You have an account? <a href="login.php">Login Here</a></p>
                                    </div>
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form -->
                    </div>
                </div>
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end sign-up -->
<!-- ================================
       START SIGN UP AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area section-bg-2 padding-top-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                     <h3 class="widget-title">GATE WIN TRICHY</h3>
                    <span class="section-divider"></span>
                   <ul class="list-items">
                        <li><a href="#">3rd Floor, PJK Compex, Near Petrol bunk</a></li>
                        <li><a href="#">Kailash Nagar, Kattur</a></li>
                        <li><a href="#">Tiruchirappalli, Tamil Nadu-620019</a></li>
                        <li><a href="#">98407 12776</a></li>
                    </ul>
                   
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Quick Links</h3>
                    <span class="section-divider"></span>
                    <ul class="list-items">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Coming Soon..</h3>
                    <span class="section-divider"></span>
                    <ul class="btn-box">
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-apple icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Coming Soon</span>
                                    <span class="app__title">App Store</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-android icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Coming Soon</span>
                                    <span class="app__title">Google Play</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <p class="copy__desc">&copy; 2021 GWT. All Rights Reserved. by <a href="#">Milky.</a></p>
                </div><!-- end col-lg-9 -->
                
            </div><!-- end row -->
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->


<!-- template js files -->
<script>
    $(document).ready(function() {
  $('#number').bind("cut copy paste drag drop", function(e) {
      e.preventDefault();
  });     
});
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/waypoint.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particlesRun.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/wow.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jul 2020 15:33:49 GMT -->
</html>