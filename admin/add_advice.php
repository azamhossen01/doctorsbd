<?php
session_start();
if (isset($_SESSION['email']))
    echo " ";
else
    header("location:../index.php");

$name=$title=$description=$speciality=$date= $time='';
$nameErr =$titleErr= $descriptionErr=$specialityErr=$timeErr=$dateErr= '';
if ( (isset($_POST['name'])) != ""  &&  (isset($_POST['title'])) != "" && $_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$speciality=$_POST['speciality'];

    $status = "OK";
    $msg = "";

   if (empty($name)) { // checking your name
        $nameErr = "* Please Doctor Name!.<BR>";
        $status = "NOTOK";
    }
    
     else if (empty($speciality)) { // checking your name
        $divisionErr = "* Please Enter Speciality!<BR>";
        $status = "NOTOK";
    }

     else if (empty($description)) { // checking your name
         $divisionErr = "* Please Enter Description!<BR>";
         $status = "NOTOK";
     }




    if ($status == "OK") {

        include('db_connect.php');


        $result = mysqli_query($con,"SELECT * FROM doctor_advice where title='$title'");
        $num_rows = mysqli_num_rows($result);


        if ($num_rows > 0) {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("ERROR!","Post already exists!","error");';
            echo '}, 500);</script>';
        } else {
            if (mysqli_query($con,"INSERT INTO doctor_advice (`doctor_name`,`speciality`,`title`,`description`,`date`,`time`) VALUE ('$name','$speciality','$title','$description','$date','$time')")) {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Advice Successfully Added!","Done!","success");';
                echo '}, 500);</script>';


                echo '<script type="text/javascript">';
                echo "setTimeout(function () { window.open('view_doctor_advice.php','_self')";
                echo '}, 1500);</script>';

            } else {// display the error message
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("ERROR!","Something Wrong!","error");';
                echo '}, 500);</script>';
            }

        }
    }
}
?>


<!doctype html>
<html lang="en">
<head>

    <style>
        .error {
            font-family: sans-serif;
            font-style: italic;
            color: #FF0000;
        }

        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript,
        if it's not present, don't show loader */
        .no-js #loader {
            display: none;
        }

        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }

        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
        }

        #my_button {
            display: inline-block;
            width: 150px;
            height: 50px;
            margin: 2px;
        }

    </style>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
            ;
        });
    </script>

    <link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css"/>

    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Add Advice</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>

</head>
<body>

<!-- <div class="se-pre-con"></div> <!--For preloader-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/swal2/sweetalert2.min.js"></script>


<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin Panel
                </a>
            </div>


            <ul class="nav">
                <li >
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li>
                    <a href="view_doctor.php">
                        <i class="pe-7s-plus"></i>
                        <p>Doctor</p>
                    </a>
                </li>


                <li >
                    <a href="view_hospital.php">
                        <i class="pe-7s-plus"></i>
                        <p>Hospital</p>
                    </a>
                </li>

                <li >
                    <a href="view_ambulance.php">
                        <i class="pe-7s-plus"></i>
                        <p>Ambulance</p>
                    </a>
                </li>


                <li>
                    <a href="blood_donor.php">
                        <i class="pe-7s-plus"></i>
                        <p>Blood Donor</p>
                    </a>
                </li>

                <li class="active">
                    <a href="view_doctor_advice.php">
                        <i class="pe-7s-plus"></i>
                        <p>Doctor Advice</p>
                    </a>
                </li>





                <li>
                    <a href="logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Add Advice</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">

                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <form role="form" id="student_info_form" name="form3" method="post" action="add_advice.php">

            <div class="col-xs-10">
              
                <button id="my_button" type="button" class="btn btn-danger btn-fill pull-left" onClick="window.open('view_doctor_advice.php','_self')"><i class="fa fa-align-justify"></i>View Advice</button>
        <button id="my_button" type="button" class="btn btn-info btn-fill pull-left" onClick="window.open('add_advice.php','_self')"><i class="fa fa-align-justify"></i>Add Advice</button>
        
                <br><br>
            </div>

            <div class="form-group">
                <div class="col-xs-10">
                    <br>
                  

                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Enter Doctor Name">

                    </div>

                    <span class="error"> <?php echo $nameErr; ?></span>
                    <br>





                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="speciality" placeholder="Enter Doctor Speciality">

                    </div>

                    <span class="error"> <?php echo $specialityErr; ?></span>
                    <br>

                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="title"  placeholder="Enter Post Title">

                    </div>

                    <span class="error"> <?php echo $titleErr; ?></span>
                    <br>


                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <textarea class="form-control" name="description" placeholder="Enter Description" rows="5"></textarea>

                    </div>

                    <span class="error"> <?php echo $descriptionErr; ?></span>
                    <br>


                    <level>Date</level>
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d');?>">

                    </div>

                    <span class="error"> <?php echo $dateErr; ?></span>
                    <br>

                    <level>Time</level>
                    <div class="input-group ">

                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="time" value="<?php  date_default_timezone_set("Asia/Dhaka");echo date("h:i:s a");?>">

                    </div>

                    <span class="error"> <?php echo $timeErr; ?></span>
                    <br>




                    <br>
                    <button type="submit" id="btn_submit" class="btn btn-info btn-fill pull-right">Submit</button>
                    <div class="clearfix"></div>

                    <br>
                    <br>
                </div>
            </div>

        </form>


        <script type="text/javascript">

            $(document).on('click', '#btn_submit', function (e) {
                e.preventDefault();
                swal({
                    title: "ARE YOU SURE ?",
                    text: "Want to add new advice ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "YES",
                    cancelButtonText: "NO",
                    closeOnConfirm: false,
                    closeOnCancel: false

                }).then(function (e) {
                    $('#student_info_form').submit();
                });
            });


        </script>


    </div>
</div>


</body>



<!--  Checkbox, Radio & Switch Plugins -->

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>


</html>
