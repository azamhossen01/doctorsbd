<?php

include ('db_connect.php');

$id=$_GET['id'];

$delete=mysqli_query($con,"DELETE FROM hospitals  WHERE id='$id'");

if($delete)
{
	echo "<script>alert('Hospital Deleted!')</script>";
	echo "<script>window.open('view_hospital.php','_self')</script>";
}

else
{
	echo "<script>alert('Failed!')</script>";
	echo "<script>window.open('view_hospital.php','_self')</script>";
}


?>