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
                    <h4>Showing Doctors List . . . .</h4>
                </div>
                <div class="col-md-6">
                    <form method="post" action="list.php">
                        <div id="custom-search-input">

                            <div class="table-responsive">
                                <table width="80%" id="dynamic_field" class="table-responsive">


                                    <tr>


                                        <td>
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
                $search_text = $search_category = $search_division = $search_area = "";


                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $search_division=$_POST['division'];

                    $search_query = "SELECT * FROM doctors WHERE division LIKE '%$search_division%' ";
                    if (!isset($_POST['category'])) {
                        $search_category = "";
                    } else {

                        $search_category = $_POST['category'];

                        $search_query .= " AND speciality LIKE '%$search_category%'";
                    }
                    if (!isset($_POST['area'])) {
                        $search_area = "";
                    } else {

                        $search_area = $_POST['area'];
                        $search_query .= " AND address LIKE '%$search_area%'";
                    }


                    if (strlen($_POST['doctor_name'])<1 ) {
                        $search_text = "";
                    }
                    else {
                        $search_text = $_POST['doctor_name'];
                        $search_query .= " AND first_name LIKE '%$search_text%' OR last_name LIKE '%$search_text%' ";
                    }





                }

                $category_id = '';
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {

                    if (isset($_GET['category_id']))
                        $category_id = $_GET['category_id'];

                }



                if (!empty($category_id)) {
                    $sql = "SELECT * FROM doctors WHERE category_id='$category_id' ";
                }

                else if (!empty($search_text) OR !empty($search_division) OR !empty($search_area) OR !empty($search_category)) {
                    $sql = $search_query;

                  //  echo $sql;
                } else {
                    $sql = "SELECT * FROM doctors";
                }
                $result = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($result);

                if ($num_rows <= 0) {

                    echo "<div class='strip_list wow fadeIn'> ";


                    echo "<h2>Sorry ! No Doctors Found!</h2>";

                    echo "</div>";

                } else {
                    while ($row = mysqli_fetch_array($result)) {


                        echo "<div class='strip_list wow fadeIn'> ";
                        echo "<a href=\"#0\" class='wish_bt'></a>";
                        echo "<figure>";

//                        if ($row['gender'] == 'Male') {
//                            echo "<img src='img/doctor_male__placeholder.svg'>";
//                        } else {
//                            echo "<img src='img/dr_female_placeholder.svg'>";
//
//                        }

                        if (empty($row['dr_img'])) {
                            if ($row['gender'] == 'Male') {
                                echo "<img src='img/doctor_male__placeholder.svg'></a>";
                            } else {
                                echo "<img src='img/dr_female_placeholder.svg'></a>";

                            }
                        }
                        else
                        {
                            $dr_img=$row['dr_img'];

                            echo "<img src='admin/dr_img/$dr_img' width='60' height='60'>";
                        }
                        echo "</figure>";
                        echo "<small>" . $row['speciality'] . "</small>";
                        echo "<h3>Dr. " . $row['first_name'] . " " . $row['last_name'] . "</h3>";
                        echo "<p>" . $row['address'] . "</p>";

                        $id = $row['id'];


                        echo "<ul>";
                        //echo 	"<li><a href=\"#0\" onclick=\"onHtmlClick('Doctors', 0)\" class=\"btn_listing\">View on Map</a></li>";
                        echo "<li><a href=\"https://www.google.com/maps/dir//" . $row['address'] . "/@22.3568472,91.7481622,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x30acd8a64095dfd3:0x5015cc5bcb6905d9!2m2!1d91.7831819!2d22.356851\" target=\"_blank\">Directions</a></li>";
                        echo "<li><a href=\"detail-page.php?id=$id\">Details</a></li>";
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

                <script src="http://h2.flashvortex.com/display.php?id=2_1544336408_22190_364_0_588_91_9_2_47"
                        type="text/javascript"></script>
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
                    <a href="index.php" title="Findoctor">
                        <img src="img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
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
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map_listing.js"></script>
<script src="js/infobox.js"></script>


</body>
</html>



