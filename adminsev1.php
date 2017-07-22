<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lmsadmin");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$admin=$_SESSION['admin'];
    $admin2=$_POST['admin'];

	 $sql= "UPDATE users SET admin='$admin2' WHERE admin='$admin'";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>