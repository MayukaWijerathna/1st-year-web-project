<?php 

session_start();

	$conn = mysqli_connect("localhost","root","","lms");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

$uid = $_POST['id'];
$pwd = $_POST['password'];


$sql = "SELECT * FROM users WHERE id='$uid' AND password='$pwd'";


$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	header('Location:error.php');
}else {
 	$_SESSION['username'] = $row['username'];
 	$_SESSION['password'] = $row['password'];
 	$_SESSION['phone'] = $row['phone'];
 	$_SESSION['email'] = $row['email'];
 	$_SESSION['id'] = $row['id'];
 	$_SESSION['faculty'] = $row['faculty'];
 	header('Location:home.php');

}


 ?>