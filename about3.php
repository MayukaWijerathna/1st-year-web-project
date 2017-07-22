<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS - Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script language="javascript" type="text/javascript" src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="about3.css">
	<script language="javascript" type="text/javascript" src="about.js"></script>
	<link rel="icon" type="image/png" href="pictures/favicon-16x16.png" sizes="16x16">

</head>
<body>
	<div class="background-wrap">
		<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="login.mp4" type="video/mp4" >
		</video>
	</div>
<div id="maindiv">
		
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
							<a id="btitle1">ABOUT US</a><br><br>
							<div id="bline1"></div>
							<br><br>
							<table id="bimgcat">
								<tr>
									<td><img id="bimg1" src="pictures/img (1).jpg" onmouseover="img1prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg2" src="pictures/img (2).jpg" onmouseover="img2prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg3" src="pictures/img (3).jpg" onmouseover="img3prv();" onmouseleave="imgprvlv();"></td>
								</tr>
								<tr>
									<td><img id="bimg4" src="pictures/img (4).jpg" onmouseover="img4prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg5" src="pictures/img (5).jpg" onmouseover="img5prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg6" src="pictures/img (6).jpg" onmouseover="img6prv();" onmouseleave="imgprvlv();"></td>
								</tr>
								<tr>
									<td><img id="bimg7" src="pictures/img (7).jpg" onmouseover="img7prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg8" src="pictures/img (8).jpg" onmouseover="img8prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg9" src="pictures/img (9).jpg" onmouseover="img9prv();" onmouseleave="imgprvlv();"></td>
								</tr>
								<tr>
									<td><img id="bimg10" src="pictures/img (10).jpg" onmouseover="img10prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg11" src="pictures/img (11).jpg" onmouseover="img11prv();" onmouseleave="imgprvlv();"></td>
									<td><img id="bimg12" src="pictures/img (12).jpg" onmouseover="img12prv();" onmouseleave="imgprvlv();"></td>
								</tr>
							</table>
							<div id="bdiv1">
								
							</div>
							<center><a id="bprvtxt"></a></center><br>
							<div id="bdiv2">
							<img id="bimga" src="">	
							</div>

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
						<a href="about2.php" id="textnavb"><</a>
					</div>
					<div id="bodydiv34"></div>
					<div id="bodydiv332" onmouseover="nextbutton()"; onmouseout="mouseleav();">
						<a id="textnavb">></a>
					</div>
				</div>
		</div>

</body>
</html>