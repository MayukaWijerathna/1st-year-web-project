<!DOCTYPE html>
<html>
<head>
	<title>LMS - Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" type="image/png" href="pictures/favicon-16x16.png" sizes="16x16">
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
			<form method="post" action="server2.php">
				<table>
					<tr>
						<td><input id="input1" type="text" name="id" placeholder="STUDENT ID"></td>
					</tr>
					<tr>
						<td><input id="input1" type="password" name="password" placeholder="PASSWORD"></td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<input id="button1" type="submit" value="LOGIN">
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