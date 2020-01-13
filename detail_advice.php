<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<header class="static">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.php" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<ul id="top_access">
						<li><a href="login.html"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
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
		<!-- container -->
	</header>
	<!-- /Header -->	
	
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
					<nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li><a href="#section_1" class="active">General info</a></li>
								
								<li><a href="#sidebar">Booking</a></li>
							</ul>
						</div>
					</nav>
					<div id="section_1">
					
					<?php
					
					
                      include ('db_connect.php');

                       $id=$_GET['id'];
					   $sql="SELECT * FROM doctor_advice WHERE id=$id";
					   $result = mysqli_query ($con,$sql);
					   $row = mysqli_fetch_array($result);
					   
					?>
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-lg-5 col-md-4">
										<figure>
											<img src="img/advice.svg" alt="" class="img-fluid">
										</figure>
									</div>
									<div class="col-lg-7 col-md-8">
										
										<h1>DR. <?php echo $row['doctor_name'] ?></h1>
										
										
										<ul class="contacts">
										
									
											<li>
											
										
												<h6>Specilaity</h6> <a href="tel://<?php echo $row['speciality']?>"><?php echo $row['speciality'] ?></a></li>
												
												
										</ul>
									</div>
								</div>
							</div>
							
							<hr>
							
							<!-- /profile -->
							<div class="indent_title_in">
								<i class="icon-hospital"></i>
								<h3><?php echo $row['title']?></h3>
								<p>Doctor Advice </p>
							</div>
							<div class="wrapper_indent">
								<p> <?php echo $row ['description'];?></p>
								
								
								<!-- /row-->
							</div>
							<!-- /wrapper indent -->

							

							
							<!--  /wrapper_indent -->
						</div>
						<!-- /section_1 -->
					</div>
					<!-- /box_general -->

				
					<!-- /section_2 -->
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
                    <script src="http://h2.flashvortex.com/display.php?id=2_1544501409_9035_345_0_346_161_9_2_47" type="text/javascript"></script>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <p>
                        <a href="index.php" title="Findoctor">
                            <img src="img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
                        </a>
                    </p>

                    <p>DoctorsInfo24.com is a online platforms where you can easily find specialist doctors,hospital information,ambulance information,emergency blood donors, doctor advice etc. </p>
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

                        <li><a href="mailto:info@doctorsinfo24.com"><i class="icon_mail_alt"></i> info@doctorsinfo24.com</a></li>
                    </ul>
                    <div class="follow_us">
                        <h5>Follow us</h5>
                        <ul>
                            <li><a href="https://www.facebook.com/doctorsinfo24/" target="_blank"><i class="social_facebook"></i></a></li>
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
     
</body>
</html>