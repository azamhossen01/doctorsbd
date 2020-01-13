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
   
    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet">
    
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
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4>Showing advice list . . .</h4>
					</div>
					<div class="col-md-6">
                        <form method="post" action="advice_list.php">
                            <div class="search_bar_list">
                                <input type="text" name="search" class="form-control" required placeholder="Search by Doctor Name, Topics ....">
                                <input type="submit" value="Search">
                            </div>
                        </form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /results -->

		<div class="filters_listing">
			<div class="container">
				<ul class="clearfix">
					<li>
                        <!--
						<h6>Type</h6>
						<div class="switch-field">
							<input type="radio" id="all" name="type_patient" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="doctors" name="type_patient" value="doctors">
							<label for="doctors">Doctors</label>
							<input type="radio" id="clinics" name="type_patient" value="clinics">
							<label for="clinics">Clinics</label>
						</div>
						-->
					</li>
					<li>
                        <!--
						<h6>Layout</h6>
						<div class="layout_view">
							<a href="grid-list.html"><i class="icon-th"></i></a>
							<a href="#0" class="active"><i class="icon-th-list"></i></a>
							<a href="list-map.html"><i class="icon-map-1"></i></a>
						</div>
						-->
					</li>
					<li>
                        <!--
						<h6>Sort by</h6>
						<select name="orderby" class="selectbox">
						<option value="Closest">Closest</option>
						<option value="Best rated">Best rated</option>
						<option value="Men">Men</option>
						<option value="Women">Women</option>
						</select>
						-->
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-7">


                   <?php

                      include ('db_connect.php');
                   $search_text = '';
                   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                       if (isset($_POST['search']))
                           $search_text = $_POST['search'];
                       $sql="SELECT * FROM doctor_advice WHERE doctor_name LIKE '%$search_text%' OR speciality LIKE '%$search_text%' OR description LIKE '%$search_text%'";
                       $result = mysqli_query($con, $sql);
                       $num_rows = mysqli_num_rows($result);
                       //echo $search_text;

                   }

                   else {
                       $sql="SELECT * FROM doctor_advice";
                       $result = mysqli_query($con, $sql);
                       $num_rows = mysqli_num_rows($result);

                   }

                   if($num_rows<=0)
                   {

                       echo  "<div class='strip_list wow fadeIn'> ";



                       echo "<h2>Sorry ! No Advice Found!</h2>";

                       echo "</div>";

                   }



                   else {
                       while ($row = mysqli_fetch_array($result)) {


                           echo "<div class='strip_list wow fadeIn'> ";
                           echo "<a href=\"#0\" class='wish_bt'></a>";
                           echo "<figure>";
                           echo "<img src='img/advice.svg'>";
                           echo "</figure>";
                           echo "<small>" . $row['speciality'] . "</small>";
                           echo "<h3>" . $row['title'] . "</h3>";
                           echo "<p>Advised By: DR. " . $row['doctor_name'] . "</p>";

                           $id = $row['id'];


                           echo "<ul>";
                           echo "<li><a href=\"#0\" onclick=\"onHtmlClick('Doctors', 0)\" class=\"btn_listing\">Time: " . $row['time'] . "</a></li>";
                           echo "<li><a href=\"#0\" onclick=\"onHtmlClick('Doctors', 0)\" class=\"btn_listing\">Date: " . $row['date'] . "</a></li>";

                           echo "<li><a href=\"detail_advice.php?id=$id\">Details</a></li>";
                           echo "</ul>";
                           echo "</div>";

                       }
                   }
					  
					  ?>
					
					<!--Pagination
					<nav aria-label="" class="add_top_20">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
				<aside class="col-lg-5" id="sidebar">
                    <script src="http://h2.flashvortex.com/display.php?id=2_1544338204_3704_364_0_574_91_9_2_47" type="text/javascript"></script>
					</div>
				</aside>
				<!-- /aside -->
				
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
                        <a href="index.php" title="DoctorsInfo24">
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
	<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script>


</body>
</html>