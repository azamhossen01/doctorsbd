<?php

include ('db_connect.php');

$id=$_GET['id'];

$delete=mysqli_query($con,"DELETE FROM police_station  WHERE id='$id'");

if($delete)
{
	echo "<script>alert('Police Station Deleted!')</script>";
	echo "<script>window.open(vview_ambulance.phpself')</script>";
}

else
{
	echo "<script>alert('Failed!')</script>";
	echo "<script>window.open('viewview_ambulance.phpself')</script>";
}


?>