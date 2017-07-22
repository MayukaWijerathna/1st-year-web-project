<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$email=$_POST['email'];
    $id=$_POST['id'];

	 $sql= "UPDATE users SET email='$email' WHERE id='$id'";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>