<?php

include ('db_connect.php');

$id=$_GET['id'];

$delete=mysqli_query($con,"DELETE FROM doctor_advice  WHERE id='$id'");

if($delete)
{
	echo "<script>alert('Doctor Advice Deleted!')</script>";
	echo "<script>window.open('view_doctor_advice.php','_self')</script>";
}

else
{
	echo "<script>alert('Failed!')</script>";
	echo "<script>window.open('view_doctor_advice.php','_self')</script>";
}


?>