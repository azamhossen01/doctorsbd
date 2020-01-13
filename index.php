<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Noor Mohammed Anik">
    <title>DoctorsInfo24</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <script src="js/typeahead.min.js"></script>


    <style>



    </style>




</head>

<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="index.php" title="DoctorsInfo24">DoctorsInfo24</a></h1>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                <ul id="top_access">
                    <li><a href="user_login.php"><i class="pe-7s-user"></i></a></li>
                    <li><a href="user_register.php"><i class="pe-7s-add-user"></i></a></li>
                </ul>
                <div class="main-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>


                        <li><a href="list.php">Doctors</a></li>
                        <li><a href="hospital_list.php">Hospitals</a></li>
                        <li><a href="ambulance_list.php">Ambulance</a></li>
                        <li><a href="donor_list.php">Blood Donor</a></li>
                        <li><a href="advice_list.php">Advice</a></li>
                        <li><a href="contacts.php">Contact</a></li>


                    </ul>
                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>
<!-- /header -->

<main>
    <div class="header-video">
        <div id="hero_video">
            <div class="content">
                <h3>Find a Doctor!</h3>
                <p>
                    Find your Desire Specialist Doctor Easily At Anytime Anywhere
                </p>
                <form method="post" action="list.php">
                    <div>

                        <div class="table-responsive">
                            <table align="center">


                                <tr>

                                    <td >
                                        <select class="form-control name_list" name="division">
                                            <option value="Chittagong">Chittagong</option>
                                            <?php
                                            include('db_connect.php');

                                            $result = mysqli_query($con, "SELECT DISTINCT  division FROM doctors");
                                            //sort($result);
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<option value='" . $row['division'] . "'>" . $row['division'] . "</option>";

                                            }
                                            echo "</select>";

                                            ?>

                                    </td>


                                    <td>
                                        <select class="form-control name_list" name="area">
                                            <option value="Not Selected" selected disabled>Select Area</option>
                                            <?php


                                            $result = mysqli_query($con, "SELECT DISTINCT address FROM doctors");
                                            //sort($result);
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<option value='" . $row['address'] . "'>" . $row['address'] . "</option>";

                                            }
                                            echo "</select>";

                                            ?>

                                    </td>


                                    <td>
                                        <select class="form-control name_list" name="category" >
                                            <option value="Not Selected" selected disabled>Speciality</option>
                                            <?php


                                            $result = mysqli_query($con, "SELECT * FROM doctor_category");
                                            //sort($result);
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<option value='" . $row['category_name'] . "'>" . $row['category_name'] . "</option>";

                                            }
                                            echo "</select>";

                                            ?>


                                    </td>

                                    <td>

                                        <input type="text" name="doctor_name" class="form-control name_list " placeholder="Name">


                                    </td>



                                    <td>

                                        <button type="submit" id="btn_submit" class="btn btn-info btn-fill pull-right">SEARCH</button>
                                        <div class="clearfix"></div>


                                    </td>


                                </tr>
                            </table>
                        </div>
                    </div>


            </div>
            </form>
        </div>
    </div>
    <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro"
         data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="750">
    </div>
    <!-- /Header video -->

    <div class="container margin_120_95">
        <div class="main_title">
            <h2>Discover <strong>Specialist</strong> Doctors!</h2>
            <p>User can easily find specialist doctor and get appointment information from home!</p>
        </div>
        <div class="row add_bottom_30">
            <div class="col-lg-4">
                <div class="box_feat" id="icon_1">
                    <span></span>
                    <h3>Find a Doctor</h3>
                    <p>User can easily find specialist doctor and get appointment information from home!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_feat" id="icon_2">
                    <span></span>
                    <h3>View profile</h3>
                    <p>View doctor profile and get all necessary information and appointment fees and time </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_feat" id="icon_3">
                    <h3>Book a visit</h3>
                    <p>In doctors profile patient find contact number for taking doctors appointment from home </p>
                </div>
            </div>
        </div>
        <!-- /row -->
        <p class="text-center"><a href="list.php" class="btn_1 medium">Find Doctor</a></p>
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="main_title">
                <h2>Most Popular Doctors</h2>
                <p>Find your desire specialist popular doctor easily from your home</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">

                <?php

               // include('db_connect.php');
                $sql = "SELECT * FROM doctors WHERE is_featured=1";

                $result = mysqli_query($con, $sql);

                $num_rows = mysqli_num_rows($result);

                if ($num_rows <= 0) {


                } else {
                    while ($row = mysqli_fetch_array($result)) {

                        echo "<div class='item'>";
                        echo "<a href=\"detail-page.php?id=" . $row['id'] . "\">";

                        echo "<div class='title'>";
                        echo "<h4>Dr. " . $row['first_name'] . " " . $row['last_name'] . "<em>" . $row['speciality'] . "</em></h4>";
                        if ($row['gender'] == 'Female') {
                            echo "</div><img src='img/dr_female_placeholder.svg'/></a>";
                        } else {
                            echo "</div><img src='img/doctor_male__placeholder.svg'/></a>";
                        }
                        echo "</div>";

                    }
                }

                ?>


            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /white_bg -->

    <div class="container margin_120_95">
        <div class="main_title">
            <h2>Find by Category</h2>
            <p>Find specialist doctors by clicking desire category</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=101" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_1.svg" width="60" height="60" alt="">
                    <h3>Medicine</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=102" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_2.svg" width="60" height="60" alt="">
                    <h3>Cardiologist</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=103" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_3.svg" width="60" height="60" alt="">
                    <h3>Orthopedis</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=104" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_4.svg" width="60" height="60" alt="">
                    <h3>Blood Specialist</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=105" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_7.svg" width="60" height="60" alt="">
                    <h3>Eye Specialist</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=106" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_5.svg" width="60" height="60" alt="">
                    <h3>Dentist</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=107" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_6.svg" width="60" height="60" alt="">
                    <h3>Surgery</h3>

                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="list.php?category_id=108" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="img/icon_cat_8.svg" width="60" height="60" alt="">
                    <h3>Psychologist</h3>

                </a>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div id="app_section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <p><img src="img/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
                </div>
                <div class="col-md-6">
                    <small>Application</small>
                    <h3>Get <strong>DoctorsInfo24 App</strong> Now!</h3>
                    <p class="lead">Get DoctorsIn24 Mobile Application from app store. By using app you can easily find
                        doctors, booked an appointment, hospital information, emergency blood donors and specialist
                        doctors advice at home.</p>
                    <div class="app_buttons wow" data-wow-offset="100">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;"
                             xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow"
                                  d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1"/>
                            <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1"
                                  d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58"/>
                            <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2"
                                  d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9"/>
						</svg>
                        <a href="#0" class="fadeIn"><img src="img/apple_app.png" alt="" width="150" height="50"
                                                         data-retina="true"></a>
                        <a href="https://play.google.com/store?hl=en" target="_blank" class="fadeIn"><img
                                    src="img/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /app_section -->
</main>
<!-- /main content -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="index.php" title="Findoctor">
                        <img src="img/logo.png" data-retina="true" alt="" width="170" height="50" class="img-fluid">
                    </a>
                </p>

                <p>DoctorsInfo24.com is a online platforms where you can easily find specialist doctors,hospital
                    information,ambulance information,emergency blood donors, doctor advice etc. </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="about.php">About us</a></li>
                    <li><a href="advice_list.php">Blog</a></li>
                    <li><a href="contacts.php">Contact</a></li>

                    <li><a href="user_register.php">Register</a></li>
                    <li><a href="user_login.php">Login</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="list.php">Find Doctors</a></li>
                    <li><a href="hospital_list.php">Find Hospital</a></li>
                    <li><a href="donor_list.php">Blood Donor</a></li>
                    <li><a href="ambulance_list.php">Ambulance</a></li>
                    <li><a href="advice_list.php">Doctor Advice</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://8801307148993"><i class="icon_mobile"></i>+88 013 07 14 89 93</a></li>

                    <li><a href="mailto:info@doctorsinfo24.com"><i class="icon_mail_alt"></i> info@doctorsinfo24.com</a>
                    </li>
                </ul>
                <div class="follow_us">
                    <h5>Follow us</h5>
                    <ul>
                        <li><a href="https://www.facebook.com/doctorsinfo24/" target="_blank"><i
                                        class="social_facebook"></i></a></li>
                        <li><a href="#0"><i class="social_twitter"></i></a></li>
                        <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        <li><a href="#0"><i class="social_instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="terms_condition.php">Terms and conditions</a></li>
                    <li><a href="privacy_policy.php">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">Copyright © 2019 DoctorsInfo24</div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts.min.js"></script>
<script src="js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/video_header.js"></script>
<script>
    'use strict';
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
</script>

</body>

</html>

