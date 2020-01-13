<?php

include ('db_connect.php');

$id=$_GET['id'];

$delete=mysqli_query($con,"DELETE FROM ambulance  WHERE id='$id'");

if($delete)
{
	echo "<script>alert('Ambulance Deleted!')</script>";
	echo "<script>window.open('view_ambulance.php','_self')</script>";
}

else
{
	echo "<script>alert('Failed!')</script>";
	echo "<script>window.open('view_ambulance.php','_self')</script>";
}


?>