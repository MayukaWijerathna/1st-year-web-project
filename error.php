<!DOCTYPE html>
<html>
<head>
	<title>LMS - Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="background-wrap">
		<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="login0.mp4" type="video/mp4" >
		</video>
	</div>

	<div id="maindiv">
		<div id="box1">
			
			<center><img id="logo" src="pictures/logo.png"></center>
			<br>
			<table>
					<tr>
						<td><a id="msgtxt"><center>ERROR !</center></a></td>
					</tr>
					<tr>
						<td><a id="msgtxt1"><center>Username / Password Incorrect</center></a></td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input id="button1" onclick="window.location.href='index.php'" type="button" value="TRY AGAIN">
						</td>
					</tr>
					<tr>
						<td>
							<input id="button2" onclick="window.location.href='support.php'" type="button" value="HELP ME LOGIN">
						</td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input id="button3" onclick="window.location.href='home.php'" type="button" value="CONTINUE AS A GUEST">
						</td>
					</tr>
					
			
				</form>

		</div>
	</div>

</body>
</html>