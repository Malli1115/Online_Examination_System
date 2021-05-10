<?php include'header.php'; ?>

<?php
if (isset($_POST['form1'])) {
   
    $email=$_POST['email'];
    $subject1='Subscribtion Mail';
    $message='Subscribe Email : '.$email.'<br><br>Please Send a information about upcoming Trainings,  Webinars & News letters For That Email.';
   


    $app_name = "Mock Me Website Subscribe";
    $from_mail = $_POST['email'];
    $reply_to = $_POST['email'];
        $to = "mallikumar1998@gmail.com";
    
    
    //send email
    $headers = "From: ".$app_name."<".$from_mail.">\n";
    $headers .= "Reply-To: ".$reply_to."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
        if(!mail($to,$subject1,$message,$headers)){
        
            echo "<script>alert('Your Message Has Been Sent Successfully');</script>";
}

        else {
            
        
            
                echo "<script>alert('Your Message Has Been Sent Successfully');</script>";
    
            
        }       

     }

?>


<!--======================================
        START COURSE AREA
======================================-->

<section class="course-area padding-top-60px" style="line-height: 12px;">
    <div class="course-wrapper">
        <div class="container" style="padding-bottom: 12px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="section__title">Preparation Test</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
                            <li role="presentation">
                                <a href="#tab1" role="tab" data-toggle="tab" class="theme-btn active" aria-selected="true">
                                   TNEB | TRB
                                </a>
                            </li>
                           <!--  <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    TRB
                                </a>
                            </li> -->
                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
    <div class="card-content-wrapper section-bg padding-top-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                            <div class="row">

                                     <?php
                                          date_default_timezone_set('Asia/Kolkata');
                                          $current_time= date('H:i');

                                           $sql = "SELECT * FROM tbl_examinations WHERE category = 'TNEB|TRB'";
                                           $result = $conn->query($sql);

                                           // if ($result->num_rows > 0 AND $current_time >='19:00') {
                                            if ($result->num_rows > 0 ) {

                                            while($row = $result->fetch_assoc()) { ?>

                                                 <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text"><?php echo $row['duration'];?> Mins 
                                                    <?php echo $todaydate;?></span>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="#"><?php echo $row['exam_name'];?></a>
                                            </h3>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                               <span class="star-rating-wrap">
                                                    <span class="star__rating"><?php echo $row['rating'];?></span>
                                                    <span class="star__count">(<?php echo $row['review'];?>)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free Cost</span>
                                                <a href="student/index.php" class="theme-btn" style="padding: 0px 13px 0 13px;">Take Test</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                       </div><!-- end col-lg-4 -->

                                       
                                        <?php }   } else { ?>

                                            <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <h3 class="card__title">
                                                <a href="#">Coming Soon</a>
                                            </h3>
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                       </div><!-- end col-lg-4 -->
                                             
                                       <?php    }
                                           ?>
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->


                        <!-- <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                 <?php
                                           $sql = "SELECT * FROM tbl_examinations WHERE category = 'CTRB'";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {

                                            while($row = $result->fetch_assoc()) { ?>

                                                 <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text"><?php echo $row['duration'];?> Mins</span>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="#"><?php echo $row['exam_name'];?></a>
                                            </h3>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating"><?php echo $row['rating'];?></span>
                                                    <span class="star__count">(<?php echo $row['review'];?>)</span>
                                                </span>
                                            </div>
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free Cost</span>
                                                <a href="student/index.php" class="theme-btn" style="padding: 0px 13px 0 13px;">Take Test</a>
                                            </div>
                                        </div>
                                    </div>
                                       </div>
                                        <?php }   } else { ?>

                                            <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <h3 class="card__title">
                                                <a href="#">Coming Soon</a>
                                            </h3>
                                        </div>
                                    </div>
                                       </div>
                                       <?php    }
                                           ?>                             
                            </div>
                        </div> -->

                       
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section><!-- end courses-area -->

<!--======================================
        END COURSE AREA
======================================-->


<!-- ================================
       START FUNFACT AREA
================================= -->

<section class="register-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
             <img src="images/img23.jpg">
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h2 class="section__title">Our Institute</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">Dear Engineering Students,
Gate In Trichy (GIT) gladly informs you all that our innovative training classes for GATE, ISRO, BARC, DRDO, IES, other PSU's and Engineering relevant state government exams are going to start soon. Grab this opportunity to make your life shine.</p>
                        <p class="section__desc">
                           COURSES OFFERED:<br>
                                i) MECH<br>
                                ii) EEE<br>
                                iii) ECE<br>
                                iv) CIVIL<br>
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end register-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area padding-top-120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="section__title text-white">Latest News & Articles</h2>
                    <span class="section-divider section-divider-light"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row margin-top-30px">
            <div class="col-lg-12">
                <div class="blog-post-carousel owl-dot-and-nav">
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.php" class="card__img"><img src="images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.php">TNEB</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">3,400 Requirements Hereing</a></li>
                                    <li><span class="blog__panel-comment">2019-2020</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.php" class="card__img"><img src="images/img10.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                       <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.php">TRB</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">3,400 Requirements Hereing</a></li>
                                    <li><span class="blog__panel-comment">2019-2020</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.php" class="card__img"><img src="images/img11.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.php">BANK</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">3,400 Requirements Hereing</a></li>
                                    <li><span class="blog__panel-comment">2019-2020</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.php" class="card__img"><img src="images/img12.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                       <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="blog-single.php">SSC</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">3,400 Requirements Hereing</a></li>
                                    <li><span class="blog__panel-comment">2019-2020</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="blog-single.php" class="card__img"><img src="images/img13.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                       
                </div><!-- end blog-post-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!-- ================================
       START REGISTER AREA
================================= -->

<section class="register-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="register-form">
                    <div class="contact-form-action">
                        <h3 class="widget-title">Receive Free Courses</h3>
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email Address">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Subject<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                                    <span class="la la-book input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box">
                                <button class="theme-btn" type="submit">apply now</button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h5 class="section__meta">register</h5>
                        <h2 class="section__title">Get ahead with Learning Paths. Stay Sharp.</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">Education is the process of acquiring the body of knowledge and skills that people are expected have in your society. A education develops a critical thought process in addition to learning. Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid architecto aspernatur, facilis perspiciatis rerum saepe vel vitae? Alias culpa dicta facere maiores quam quas, quis sapiente voluptatem? Nulla, voluptatem.<br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid architecto aspernatur, facilis perspiciatis rerum saepe vel vitae? Alias culpa dicta facere maiores quam quas, quis sapiente voluptatem? Nulla, voluptatem.</p>
                        <p class="section__desc">
                            tryrem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                            when an unknown printer.
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="#" class="theme-btn">get started</a>
                    </div>
                </div><!-- end register-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

<!-- ================================
       START FUNFACT AREA
================================= -->
<section class="funfact-area text-center overflow-hidden padding-top-85px padding-bottom-85px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="counter-item">
                    <span class="la la-bullhorn count__icon"></span>
                    <h4 class="count__title counter">15</h4>
                    <p class="count__meta">expert instructors</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="counter-item">
                    <span class="la la-users count__icon"></span>
                    <h4 class="count__title counter text-color-2">98</h4>
                    <p class="count__meta">students enrolled</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="counter-item">
                    <span class="la la-certificate count__icon"></span>
                    <h4 class="count__title counter text-color-3">12</h4>
                    <p class="count__meta">years of experience</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end funfact-area -->



<!-- ================================
         END FOOTER AREA
================================= -->
<?php include'footer.php'; ?>