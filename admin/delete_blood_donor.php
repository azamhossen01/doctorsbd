<?php

include ('db_connect.php');

$id=$_GET['id'];

$delete=mysqli_query($con,"DELETE FROM blood_donor  WHERE id='$id'");

if($delete)
{
	echo "<script>alert('Blood Donor Deleted!')</script>";
	echo "<script>window.open('blood_donor.php','_self')</script>";
}

else
{
	echo "<script>alert('Failed!')</script>";
	echo "<script>window.open('blood_donor.php','_self')</script>";
}


?>