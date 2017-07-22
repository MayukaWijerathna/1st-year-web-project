<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lmsevent");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$eventno=$_POST['eventno'];
    $eventtitle=$_POST['eventtitle'];
    $eventtime=$_POST['eventtime'];
    $eventvenue=$_POST['eventvenue'];
    $eventdescription=$_POST['eventdescription'];
    

	 $sql= "UPDATE events SET eventtitle='$eventtitle', eventtime='$eventtime', eventvenue='$eventvenue', eventdescription='$eventdescription' WHERE eventno='$eventno'";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>