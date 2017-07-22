<?php 

session_start();

	$conn = mysqli_connect("localhost","root","","lmsadmin");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$admin = $_POST['admin'];
	$key = $_POST['passkey'];


	$sql = "SELECT * FROM users WHERE admin='$admin' AND passkey='$key'";


	$result = mysqli_query($conn,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		header('Location:error.php');
	}else {
	 	$_SESSION['admin'] = $row['admin'];
	 	$_SESSION['passkey'] = $row['passkey'];
	 	header('Location:adminpanel.php');

	}







 ?>