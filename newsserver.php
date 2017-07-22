<?php 
    session_start();

	$conn = mysqli_connect("localhost","root","","lmsnews");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$newsno=$_POST['newsno'];
    $newstitle=$_POST['newstitle'];
    $newsdes=$_POST['newsdes'];
    

	 $sql= "UPDATE news SET newstitle='$newstitle', newsdes='$newsdes' WHERE newsno='$newsno'";



	$result = mysqli_query($conn,$sql);

	header("location:success.php");

 ?>