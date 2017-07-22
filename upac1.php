<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$username=$_POST['username'];
    $id=$_SESSION['id'];

	 $sql= "UPDATE users SET username='$username' WHERE id='$id'";



	$result = mysqli_query($conn,$sql);

	header("location:upsuc.php");

 ?>