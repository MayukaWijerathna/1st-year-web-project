<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lmsadmin");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$admin=$_SESSION['admin'];
    $passkey=$_POST['passkey'];

	 $sql= "UPDATE users SET passkey='$passkey' WHERE admin='$admin'";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>