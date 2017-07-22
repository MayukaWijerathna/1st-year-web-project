<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$password=$_POST['password'];
    $id=$_POST['id'];

	 $sql= "UPDATE users SET password='$password' WHERE id='$id'";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>