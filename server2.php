<?php 


	$conn = mysqli_connect("localhost","root","","lms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$username=$_POST['username'];
	$id=$_POST['id'];
	$password=$_POST['password'];
	$faculty=$_POST['faculty'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	$sql = "INSERT INTO users(username,id,password,faculty,email,phone) VALUES('$username', '$id', '$password', '$faculty', '$email', '$phone')";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>