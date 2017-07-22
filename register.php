<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS - Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script language="javascript" type="text/javascript" src="main.js"></script>
	<script language="javascript" type="text/javascript" src="register.js"></script>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="icon" type="image/png" href="pictures/favicon-16x16.png" sizes="16x16">

</head>
<body>

	<div class="background-wrap">
		<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="login.mp4" type="video/mp4" >
		</video>
	</div><div id="maindiv">
		
		<div id="navbardiv">
		 	
		 	<div id="navspacediv1">
		 		
		 	</div>

		 	<div id="logodiv1">
		 		<center>
		 		<img id="logo1" src="pictures/logo.png">
		  		</center>
		 	</div>
		 	
		 	<div id="navtispace"></div>
		 	<div id="navtispace1"></div>
		 	
		 	<div id="navtitlediv">
		 		<center><br>Learning Management System</center>
		 	</div>

		 	<a href="home.php" id="navbuttontxt"><div id="navbutton" onmouseover="homebutton()"; onmouseout="mouseleave();">
		 		HOME
		 	</div></a><br>
		 	<a  href="about.php" id="navbuttontxt"><div id="navbutton" onmouseover="aboutbutton()"; onmouseout="mouseleave();">
		 		ABOUT US
		 	</div></a><br>
		 	<a href="service.php" id="navbuttontxt"><div id="navbutton" onmouseover="servicebutton()"; onmouseout="mouseleave();">
		 		SERVICES
		 	</div></a><br>
		 	<a href="student.php" id="navbuttontxt"><div id="navbutton" onmouseover="stubutton()"; onmouseout="mouseleave();">
		 		STUDENT AREA
		 	</div></a><br>
		 	<a href="support.php" id="navbuttontxt"><div id="navbutton" onmouseover="supportbutton()"; onmouseout="mouseleave();">
		 		SUPPORT
		 	</div></a><br><br><hr><br>
		 	<div id="navbutton1">
		 		<?php 
						          if (isset($_SESSION['username'])){
						            echo '<a href="logout.php" id="navbuttontxt1">LOGOUT</a>';

						          }else {
						            echo '<a href="index.php" id="navbuttontxt1">LOGIN</a>';
						          }

						         ?>	
		 	</div><br>
		 	<div id="navbutton2">
		 		<?php 
						          if (isset($_SESSION['username'])){
						            echo '<a href="account.php" id="navbuttontxt">ACCOUNT</a>';

						          }else {
						            echo '<a href="register.php" id="navbuttontxt">REGISTER</a>';
						          }

						         ?>	
		 	</div>
		 	

		</div>
		
		<div id="bodydiv">
				
				<div id="bodydiv1">
					<div id="bodydiv11">

					</div>
					<div id="bodydiv12">
						<div id="bodydiv111"></div>
						<div id="bodydiv112"></div>
						<div id="bodymsgdiv1">
							<a id="msgtxt"></a><br><br><a id="msgtxt1"></a>
						</div>
					</div>
					<div id="bodydiv13">
						<div id="bodydiv13a"></div>
						<div id="bodydiv13b"></div>	
						<div id="bodydiv13c">

							<?php 
						          if (isset($_SESSION['username'])){
						            echo '<img id="userimg" src="pictures/user.png">';
						          }else {
						            echo '<img id="userimg" src="pictures/guest.png">';
						          }

						         ?>
							
						</div>
						<div id="bodydiv13b"></div>
						<div id="bodydiv13d"></div>
						<div id="bodydiv13e"></div>
						<div id="bodydiv13f">
							
								
								<?php 
						          if (isset($_SESSION['username'])){
						            echo '<p id="username">'.$_SESSION['username'].'</p>';
						          }else {
						            echo '<p id="username"> GUEST </p>';
						          }

						         ?>

							
						</div>

					</div>
				</div>

				<div id="bodylinediv1"></div>

				<div id="bodydiv2">
					<div id="bodydiv21"></div><div id="bodydiv23"></div>
					<div id="bodydiva">
						<div id="bmargindiv"></div>
						<div id="bmargindiv3"></div>
						<div id="bmargindiv2">
							<a id="btitle1">REGISTER</a><br><br>
							<div id="bline1"></div>						
						<br><br>
							<?php 
						          if (isset($_SESSION['username'])){						            
						     echo ' <br><br>
							<center>
							<br><br>
							<img src="pictures/block.png"><br><br>
							<a id="username">
								YOU HAVE ALREADY LOGGED IN!
							</a>
							<br><br>
							
							</center>';
						}
						else{
						          	echo '


							<form name="reg" action="server.php" method="post">
							<table id="regtable">
  								<tr>
    							<td><a id="cap1txt1">Username</a></td>
    							<td><a id="cap1txt1">:</a></td>
    							<td><input id="input1" type="text" name="username" maxlength="8" placeholder="Username"></td>
  								</tr>
  								<tr>
    							<td><a id="cap1txt1">Student Id</a></td>
    							<td><a id="cap1txt1">:</a></td>
    							<td><input id="input1" type="text" name="id" maxlength="20" placeholder="BSC-XXX-XXX-00.0-000"></td>
  								</tr>
  								<tr>
    							<td><a id="cap1txt1">Password</a></td>
    							<td><a id="cap1txt1">:</a></td>
    							<td><input id="input1" type="password" name="password" maxlength="15" placeholder="Password"></td>
  								</tr>
  								<tr>
    							<td><a id="cap1txt1">Faculty</a></td>
    							<td><a id="cap1txt1">:</a></td>
    							<td>
  								<select id="input1" name="faculty">
    											<option value="1">School of Computing</option>
    											<option value="2">School of Business</option>
   												<option value="3">School of Engineering</option>
								</select>
								</td>
								</tr>
								<tr>
    							<td><a id="cap1txt1">Email</a></td>
    							<td><a id="cap1txt1">:</a></td>
    							<td><input id="input1" type="text" name="email" maxlength="30" placeholder="user@web.com"></td>
  								</tr>
  								<tr>
  								<tr>
    							<td><a id="cap1txt1">Phone</a></td>
    							<td><a id="cap1txt1">:</a></td>
    							<td><input id="input1" type="text" name="phone" maxlength="10" placeholder="07XXXXXXXX"></td>
  								</tr>
  								
  							</table>
  							<br>
								<input type="submit" id="subkey1" value="Register" onmouseover="validateForm();">
						</form>';
						          	
						          }
						          ?>








						</div>
					</div>
				</div>

				<div id="bodydiv3">
					<div id="bodydiv31"></div>
					<div id="bodydiv32">
						<div id="bodydiv321"></div>
						<div id=navtxtmsgdiv><a id="navtxtmsg">NSBM Green University Town</a></div>
					</div>
					<div id="bodydiv331" onmouseover="backbutton()"; onmouseout="mouseleav();">
						<a id="textnavb"><</a>
					</div>
					<div id="bodydiv34"></div>
					<div id="bodydiv332" onmouseover="nextbutton()"; onmouseout="mouseleav();">
						<a href="dbms2.php" id="textnavb">></a>
					</div>
				</div>
		</div>

</body>
</html>