<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Anik">
	<title>DoctorsInfo24</title>

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
		<!-- container -->
	</header>
	<!-- /Header -->
	
	<main>
		
		<!-- /map -->
		
		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3 col-md-4">
					<div id="contact_info">
						<h3>Contacts Information</h3>
						<a href="#">Head Office</a>
						
						<p>
							House-22 (Ground Floor), Road No.03, Block-D, Banasree, Dhaka-1219, Bangladesh.<br> Mobile: +88 013 07 14 89 93<br>
							<a href="#">info@doctorsinfo24.com</a>
						</p>
						<h4>Get Directions for Head Office</h4>
						<form action="http://maps.google.com/maps" method="get" target="_blank">
							<div class="form-group">
								<input type="text" name="saddr" placeholder="Enter your location" class="form-control styled">
								<input type="hidden" name="daddr" value="Road No.03, Block-D,Banasree,Dhaka">
								<!-- Write here your end point -->
							</div>
							<input type="submit" value="Get directions" class="btn_1 add_bottom_45">
						</form>
						<ul>
							<li><a href="#">Chattogram Office</a>
						
						<p>
							West High Level Road, MB Complex (2nd Floor), Wasa Circle, Chattogram, Bangladesh.<br> Mobile: +88 013 07 14 89 93<br>
							<a href="#">info@doctorsinfo24.com</a>
						</p>
							</li>
							
						</ul>
						
							<h4>Get Directions for Chttogram Office</h4>
						<form action="http://maps.google.com/maps" method="get" target="_blank">
							<div class="form-group">
								<input type="text" name="saddr" placeholder="Enter your location" class="form-control styled">
								<input type="hidden" name="daddr" value="Wasa Circle,Chittagong">
								<!-- Write here your end point -->
							</div>
							<input type="submit" value="Get directions" class="btn_1 add_bottom_45">
						</form>
					</div>
				</aside>
				<!--/aside -->
				<div class=" col-lg-8 col-md-8 ml-auto">
					<div class="box_general">
						<h3>Contact us</h3>
						<p>
							Feel free to contact with us.
						</p>
						<div>
							<div id="message-contact"></div>
							<form method="post" action="assets/contact.php" id="contactform">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Last name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Phone number">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;" placeholder="Write your message!"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="verify_contact" class=" form-control" placeholder=" 3 + 1 =">
										</div>
									</div>
								</div>
								<input type="submit" value="Submit" class="btn_1 add_top_20" id="submit-contact">
							</form>
						</div>
						<!-- /col -->
					</div>
				</div>
				<!-- /col -->
			</div>
			<!-- End row -->
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
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="assets/validate.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/mapmarker.jquery.js"></script>
	<script src="js/mapmarker_contacts_func.js"></script>
     
</body>
</html>